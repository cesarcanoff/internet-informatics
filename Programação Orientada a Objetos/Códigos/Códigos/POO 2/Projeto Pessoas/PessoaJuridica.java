package Proj_Pessoas;

public class PessoaJuridica extends Pessoa{
	private String cnpj;
	public String endereco;
	
	public PessoaJuridica() {
		
	}
	
	public String getCnpj() {
		return cnpj;
	}

	public void setCnpj(String cnpj) {
		this.cnpj = cnpj;
	}

	public String getEndereco() {
		return endereco;
	}

	public void setEndereco(String endereco) {
		this.endereco = endereco;
	}
}
