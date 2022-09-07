package Proj_Veiculos;

public class Automovel extends Veiculo{
    //Atributoa.
    public String cor;
    public float velocidade;
    
    public Automovel() {
    	
    }
    
    //Metodos Especiais.
    public String getCor() {
        return cor;
    }

    public void setCor(String cor) {
        this.cor = cor;
    }

    public float getVelocidade() {
        return velocidade;
    }

    public void setVelocidade(float velocidade) {
        this.velocidade = velocidade;
    }

}