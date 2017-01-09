<?php
namespace Allugator\V1\Rest\Busca;

class BuscaEntity
{
    protected $idproduto;
    protected $produto;
    protected $id_usuario;
    protected $valor;
    protected $deletar;
    protected $disponivel;
    protected $quantidade;
    protected $descricao;
    protected $tag;
    protected $idcategoria;
    protected $categoria;
    protected $latitude;
    protected $longitude;
    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @return BuscaEntity
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @return BuscaEntity
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdproduto()
    {
        return $this->idproduto;
    }

    /**
     * @param mixed $idproduto
     * @return BuscaEntity
     */
    public function setIdproduto($idproduto)
    {
        $this->idproduto = $idproduto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @param mixed $produto
     * @return BuscaEntity
     */
    public function setProduto($produto)
    {
        $this->produto = $produto;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     * @return BuscaEntity
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     * @return BuscaEntity
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeletar()
    {
        return $this->deletar;
    }

    /**
     * @param mixed $deletar
     * @return BuscaEntity
     */
    public function setDeletar($deletar)
    {
        $this->deletar = $deletar;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDisponivel()
    {
        return $this->disponivel;
    }

    /**
     * @param mixed $disponivel
     * @return BuscaEntity
     */
    public function setDisponivel($disponivel)
    {
        $this->disponivel = $disponivel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     * @return BuscaEntity
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     * @return BuscaEntity
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param mixed $tag
     * @return BuscaEntity
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * @param mixed $idcategoria
     * @return BuscaEntity
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     * @return BuscaEntity
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
        return $this;
    }

}
