<?php
class MotoManager extends DbManager {
   
    public function getAll() {
        $query = $this->bdd->prepare("SELECT * FROM moto");
        $query->execute();
        $results = $query->fetchAll(2);
        $motos = [];
        foreach ($results as $res){
            $motos[] = new Moto($res['id'],$res["brand"], $res['model'],
                $res['type'],
                $res['picture']);
        }
        return $motos;
    }

    public function getOne($id){
        $query =
            $this->bdd->prepare("SELECT * FROM moto WHERE id = :id");
        $query->bindParam(':id', $id);
        $query->execute();
        $res = $query->fetch();

        $moto = null;
        if($res){
            $moto = new Moto($res['id'], $res["brand"], $res['model'],
            $res['type'],
            $res['picture']);
    }
        return $moto;
    }

    public function getByType($type) {
        $query = $this->bdd->prepare("SELECT * FROM moto WHERE type=:type");
        $query->bindParam(':type', $type);
        $query->execute();
        $results = $query->fetchAll(2);
        $motos = [];

        foreach ($results as $res){
            $motos[] = new Moto($res['id'], $res["brand"], $res['model'],
                $res['type'],
                $res['picture']);
        }
        return $motos;
    }

    public function add(Moto $moto) {
        $brand=$moto->getBrand();
        $model = $moto->getModel();
        $type= $moto->getType();
        $picture = $moto->getPicture();
        $query = $this->bdd->prepare(
            "INSERT INTO moto (brand, model, type, picture) VALUES
                    (:brand, :model, :type, :picture)");
        $query->execute(
            [
                "brand"=>$brand,
                "model"=>$model,
                "type"=> $type,
                "picture"=> $picture]);

        $moto->setId($this->bdd->lastInsertId());
        return $moto;
    }

    public function delete($id){
        $query = $this->bdd->prepare("DELETE FROM moto WHERE id=:id");
        $query->bindParam("id", $id);
        $query->execute();
    }
}
