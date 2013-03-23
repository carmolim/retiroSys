<?php
class Pessoa
{
    
	// =============
    // = atributos =
    // =============

    //chave
    private $id_pessoa;
    
    // identificação
    private $nome;						// string
    private $sobrenome;					// string
    private $email;						// string
    private $senha;						// string
    private $sexo;						// string
    private $diaNasc;					// int
    private $mesNasc;					// int
    private $anoNasc;					// int
    private $rg;						// ?? string or int
    private $cpf;						// ?? string or int

    // outras informações
    private $celular;					// ?
    private $telefone;					// ?
    private $profissao;					// string
    private $estadoCivil;				// string
    private $cidade;					// string
    private $estado;					// String
    private $adventista;				// boolean ?
    private $igreja;					// string


    // saúde
    private $contatoEmergencia;			// sring
    private $telefoneContato;			// ?? string or int
    private $doenca;					// ?? string or int
    private $alergia;					// string
    private $cuidado;					// string


    // locomoção
    private $precisaCarona;				// boolean
    private $vagas;						// int
    private $horaSaida;					// ??


    // acomodação
	private $quarto;
	// id do quarto | só vai precisar fazer isso?
	// ou vai precisar de um objeto da classe quarto?


    // formas de pagamento
    private $formaPagamento;



    // ===========
    // = métodos =
    // ===========



    // setters
    //////////
    //chave
    public function setId_pessoa($n)
    {
        $this->id_pessoa = $n;
    }

    // identificação

    public function setNome($n)
    {
    	$this->nome = $n;
    }

    public function setSobrenome($n)
    {
        $this->sobrenome = $n;
    }
    
    public function setEmail($n)
    {
        $this->email = $n;
    }
    
    public function setSenha($n)
    {
        $this->senha = $n;
    }

    public function setSexo($n)
    {
        $this->sexo = $n;
    }

    public function setDiaNasc($n)
    {
        $this->diaNasc = $n;
    }

    public function setMesNasc($n)
    {
        $this->mesNasc = $n;
    }

    public function setAnoNasc($n)
    {
        $this->anoNasc = $n;
    }

    public function setRG($n)
    {
        $this->rg = $n;
    }

    public function setCPF($n)
    {
        $this->cpf = $n;
    }

    // outras informações

    public function setCelular($n)
    {
        $this->celular = $n;
    }

    public function setTelefone($n)
    {
        $this->telefone = $n;
    }
    public function setProfissao($n)
    {
        $this->profissao = $n;
    }

    public function setEstadoCivil($n)
    {
        $this->estadoCivil = $n;
    }

    public function setCidade($n)
    {
        $this->cidade = $n;
    }

    public function setEstado($n)
    {
        $this->estado = $n;
    }

    public function setAdventista($n)
    {
        $this->adventista = $n;
    }

    public function setIgreja($n)
    {
        $this->igreja = $n;
    }


    // saúde

    public function setContatoEmergencia($n)
    {
        $this->contatoEmergencia = $n;
    }

    public function setTelefoneContato($n)
    {
        $this->telefoneContato = $n;
    }

    public function setDoenca($n)
    {
        $this->doenca = $n;
    }

    public function setAlergia($n)
    {
        $this->alergia = $n;
    }

    public function setCuidado($n)
    {
        $this->cuidado = $n;
    }


    // locomoção

    public function setPrecisaCarona($n)
    {
        $this->precisaCarona = $n;
    }

    public function setVagas($n)
    {
        $this->vagas = $n;
    }

    public function setHoraSaida($n)
    {
        $this->horaSaida = $n;
    }


    // acomodação

    public function setQuarto($n)
    {
        $this->quarto = $n;
    }


    // formas de pagamento

    public function setFormaPagamento($n)
    {
        $this->formaPagamento = $n;
    }
    


    // getters
    //////////
    //chave
    public function getId_pessoa()
    {
        return $this->id_pessoa;
    }


    // identificação

    public function getNome()
    {
        return $this->nome;
    }

    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getSenha()
    {
        return $this->senha;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getDiaNasc()
    {
        return $this->diaNasc;
    }

    public function getMesNasc()
    {
        return $this->mesNasc;
    }

    public function getAnoNasc()
    {
        return $this->anoNasc;
    }

    public function getRG()
    {
        return $this->rg;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    // outras informações

    public function getCelular()
    {
        return $this->celular;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }
    
    public function getProfissao()
    {
        return $this->profissao;
    }

    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    public function getCidade()
    {
        return $this->cidade;
    }
    
    public function getEstado()
    {
        return $this->estado;
    }

    public function getAdventista()
    {
        return $this->adventista;
    }

    public function getIgreja()
    {
        return $this->igreja;
    }


    // saúde

    public function getContatoEmergencia()
    {
        return $this->contatoEmergencia;
    }

    public function getTelefoneContato()
    {
        return $this->telefoneContato;
    }

    public function getDoenca()
    {
        return $this->doenca;
    }

    public function getAlergia()
    {
        return $this->alergia;
    }

    public function getCuidado()
    {
        return $this->cuidado;
    }


    // locomoção

    public function getPrecisaCarona()
    {
        return $this->precisaCarona;
    }

    public function getVagas()
    {
        return $this->vagas;
    }

    public function getHoraSaida()
    {
        return $this->horaSaida;
    }


    // acomodação

    public function getQuarto()
    {
        return $this->quarto;
    }


    // formas de pagamento

    public function getFormaPagamento()
    {
        return $this->formaPagamento;
    } 
    
} // end of class pessoa

?>
