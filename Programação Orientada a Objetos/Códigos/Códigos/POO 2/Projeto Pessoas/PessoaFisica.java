package Proj_Pessoas;

public class PessoaFisica extends Pessoa{
	private String cpf;
	public int ano_nasc;
	
	public PessoaFisica() {
		
	}
	
	public String getCpf() {
		return cpf;
	}

	public void setCpf(String cpf) {
		this.cpf = cpf;
	}

	public double getAno() {
		return ano_nasc;
	}

	public void setAno(int ano_nasc) {
		this.ano_nasc = ano_nasc;
	}
	
}
