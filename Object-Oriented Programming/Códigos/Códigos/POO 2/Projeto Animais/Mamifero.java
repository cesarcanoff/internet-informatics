package Proj_Animais;

public class Mamifero extends Animais {
	// Atributos
	public String cor;
	public String nome;
	public int idade;

	public Mamifero() {
		
	}
	
	// Metodos (opcional)
	public void Andar() {
		// Código...
	}

	// Metodos Especiais
	public String getCor() {
		return cor;
	}

	public void setCor(String cor) {
		this.cor = cor;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public int getIdade() {
		return idade;
	}

	public void setIdade(int idade) {
		this.idade = idade;
	}

}
