<?php 

 Class Musica{
 	
 	private $id_musica;
 	private $nome;
 	private $foto_path;
 	private $musica_path;
 	private $ano;
 	private $destaque;

 
    /**
     * @return mixed
     */
    public function getIdMusica()
    {
        return $this->id_musica;
    }

    /**
     * @param mixed $id_musica
     *
     * @return self
     */
    public function setIdMusica($id_musica)
    {
        $this->id_musica = $id_musica;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFotoPath()
    {
        return $this->foto_path;
    }

    /**
     * @param mixed $foto_path
     *
     * @return self
     */
    public function setFotoPath($foto_path)
    {
        $this->foto_path = $foto_path;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMusicaPath()
    {
        return $this->musica_path;
    }

    /**
     * @param mixed $musica_path
     *
     * @return self
     */
    public function setMusicaPath($musica_path)
    {
        $this->musica_path = $musica_path;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     *
     * @return self
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDestaque()
    {
        return $this->destaque;
    }

    /**
     * @param mixed $destaque
     *
     * @return self
     */
    public function setDestaque($destaque)
    {
        $this->destaque = $destaque;

        return $this;
    }
}