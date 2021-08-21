<?php 

class Fossil {
    private $idFossil;
    private $nome;
    private $periodo;
    private $altura;
    private $comprimento;
    private $peso;
    private $alimentacao;
    private $local;
    private $codImagem;
    private $descImagem;
    private $caminhoImagem;
    private $nomeImagem;
    private $caminhoImagem2;
    private $nomeImagem2;
    private $caminhoImagem3;
    private $nomeImagem3;


    public function setIdFossil($idFossil) {
        $this->idFossil = $idFossil;
    }

    public function getIdFossil() {
        return $this->idFossil;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setComprimento($comprimento) {
        $this->comprimento = $comprimento;
    }

    public function getComprimento() {
        return $this->comprimento;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setAlimentacao($alimentacao) {
        $this->alimentacao = $alimentacao;
    }

    public function getAlimentacao() {
        return $this->alimentacao;
    }




    public function setLocal($local) {
        $this->local = $local;
    }

    public function getLocal() {
        return $this->local;
    }


    //Cadartrar Imagem
    public function setCodImagem($codImagem) {
        $this->codImagem = $codImagem;
    }

    public function getcodImagem() {
        return $this->codImagem;
    }


    public function setDescImagem($descImagem) {
        $this->descImagem = $descImagem;
    }

    public function getDescImagem() {
        return $this->descImagem;
    }


    public function setCaminhoImagem($caminhoImagem) {
        $this->caminhoImagem = $caminhoImagem;
    }

    public function getCaminhoImagem() {
        return $this->caminhoImagem;
    }


    public function setNomeImagem($nomeImagem) {
        $this->nomeImagem = $nomeImagem;
    }

    public function getNomeImagem() {
        return $this->nomeImagem;
    }

    public function setCaminhoImagem2($caminhoImagem2) {
        $this->caminhoImagem2 = $caminhoImagem2;
    }

    public function getCaminhoImagem2() {
        return $this->caminhoImagem2;
    }


    public function setNomeImagem2($nomeImagem2) {
        $this->nomeImagem2 = $nomeImagem2;
    }

    public function getNomeImagem2() {
        return $this->nomeImagem2;
    }

    public function setCaminhoImagem3($caminhoImagem3) {
        $this->caminhoImagem3 = $caminhoImagem3;
    }

    public function getCaminhoImagem3() {
        return $this->caminhoImagem3;
    }


    public function setNomeImagem3($nomeImagem3) {
        $this->nomeImagem3 = $nomeImagem3;
    }

    public function getNomeImagem3() {
        return $this->nomeImagem3;
    }

    public function cadastrar2($fossil){
        $conexao = Conexao::pegarConexao();
        
        $stmt = $conexao->prepare("INSERT INTO tbfossil
                                     (nomeFossil, periodoFossil, alturaFossil, comprimentoFossil, pesoFossil, alimentacaoFossil, localFossil)
                                     VALUES(?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $fossil->getNome());
        $stmt->bindValue(2, $fossil->getPeriodo());
        $stmt->bindValue(3, $fossil->getAltura());
        $stmt->bindValue(4, $fossil->getComprimento());
        $stmt->bindValue(5, $fossil->getPeso());
        $stmt->bindValue(6, $fossil->getAlimentacao());
        $stmt->bindValue(7, $fossil->getLocal());
        $stmt->execute();


        $stmt = $conexao->prepare("INSERT INTO tbimagem
        (descimagem,caminhoimagem, caminhoimagem2, caminhoimagem3)
        VALUES(?,?,?,?)");
        $stmt->bindValue(1, $fossil->getDescImagem());
        $stmt->bindValue(2, $fossil->getCaminhoImagem());
        $stmt->bindValue(3, $fossil->getCaminhoImagem2());
        $stmt->bindValue(4, $fossil->getCaminhoImagem3());

        $stmt->execute();
        return 'Cadastro realizado com sucesso';
        echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
}

     public function listar(){
        $conexao = Conexao::pegarConexao();


        $querySelect = "select nomeFossil, periodoFossil, alturaFossil, comprimentoFossil, pesoFossil, alimentacaoFossil,  localFossil
        from tbfossil";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista; 
     }
        
        public function listar2(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "select descimagem,
                            caminhoimagem, caminhoimagem2, caminhoimagem3
                            from tbimagem";
            $resultado2 = $conexao->query($querySelect);
            $lista2 = $resultado2->fetchAll();
            return $lista2; 
            
        
    }

}
