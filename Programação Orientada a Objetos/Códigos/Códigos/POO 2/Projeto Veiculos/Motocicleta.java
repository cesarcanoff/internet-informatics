
package Proj_Veiculos;

public class Motocicleta extends Veiculo{
    //Atributos.
    public String modelo;
    public String marca;
    
    public Motocicleta() {
    	
    }
    
    //Metodos Especiais
    public String getModelo() {
        return modelo;
    }

    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    public String getMarca() {
        return marca;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }
}