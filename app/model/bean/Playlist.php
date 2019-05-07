<?php 

Class Playlist{

	private $id_playlist;
	private $id_usuario;
	private $id_musica;
	

    /**
     * @return mixed
     */
    public function getIdPlaylist()
    {
        return $this->id_playlist;
    }

    /**
     * @param mixed $id_playlist
     *
     * @return self
     */
    public function setIdPlaylist($id_playlist)
    {
        $this->id_playlist = $id_playlist;

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
     *
     * @return self
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

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
}