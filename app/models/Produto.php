<?php


namespace models;


class Produto
{
    private
        $id_produto,
        $nome_produto,
        $descricao_produto,
        $preco_produto,
        $img_item,
        $fk_id_produto_ctg,
        $fk_id_rating,
        $produto_status;

    public function getIdProduto()
    {
        return $this->id_produto;
    }


    public function setIdProduto($id_produto)
    {
        $this->id_produto = $id_produto;
    }


    public function getNomeProduto()
    {
        return $this->nome_produto;
    }

    public function setNomeProduto($nome_produto)
    {
        $this->nome_produto = $nome_produto;
    }

    public function getDescricaoProduto()
    {
        return $this->descricao_produto;
    }

    public function setDescricaoProduto($descricao_produto)
    {
        $this->descricao_produto = $descricao_produto;
    }

    public function getPrecoProduto()
    {
        return $this->preco_produto;
    }


    public function setPrecoProduto($preco_produto)
    {
        $this->preco_produto = $preco_produto;
    }


    public function getImgItem()
    {
        return $this->img_item;
    }

    public function setImgItem($img_item)
    {
        $this->img_item = $img_item;
    }

    public function getFkIdProdutoCtg()
    {
        return $this->fk_id_produto_ctg;
    }

    public function setFkIdProdutoCtg($fk_id_produto_ctg)
    {
        $this->fk_id_produto_ctg = $fk_id_produto_ctg;
    }


    public function getFkIdRating()
    {
        return $this->fk_id_rating;
    }


    public function setFkIdRating($fk_id_rating)
    {
        $this->fk_id_rating = $fk_id_rating;
    }

    public function getProdutoStatus()
    {
        return $this->produto_status;
    }

    public function setProdutoStatus($produto_status)
    {
        $this->produto_status = $produto_status;
    }

}