<?php
/**
 * Created by PhpStorm.
 * User: terainfor
 * Date: 19/10/16
 * Time: 15:29
 */

namespace Allugator\V1\Rest\Busca;


use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Hydrator\ClassMethods;
use Zend\Paginator\Adapter\DbTableGateway;

class BuscaRepository
{

    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {

        $this->tableGateway = $tableGateway;

    }

    public function findAll($where){
        if($where != false):
            $select1= $this->busca($where,'produto');
            $select2= $this->busca($where,'descricao');
            $select1->combine($select2);
            $sql = $this->tableGateway->selectWith($select1);
        endif;
        return $sql;
    }
    public function find($id){
        $select = $this->tableGateway->getSql()->select()
            ->join('categoria','categoria.id=produto.idcategoria',['categoria'=>'categoria'])
            ->join('usuario','usuario.idusuario=produto.id_usuario',['latitude'=>'latitude','longitude'=>'longitude'])
            ->where('produto.deletar = "0"')
            ->where('produto.idproduto='.(int)$id);
        $sql = $this->tableGateway->selectWith($select)->current();
        return $sql;
    }

    public function busca($data,$p){
        $select = $this->tableGateway->getSql()->select()
            ->join('categoria','categoria.id=produto.idcategoria',['categoria'=>'categoria'])
            ->join('usuario','usuario.idusuario=produto.id_usuario',['latitude'=>'latitude','longitude'=>'longitude'])
            ->where('produto.deletar = "0"')
            ->where('produto.'.$p.' like "%'.$data.'%"');

        return $select;
    }

    public function findByUsername($id){
        print $id; die;
    }
}