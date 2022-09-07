package FormasGeométricas;
public class Circulo {

    private double raio;
    private final double PI = 3.14;

    public Circulo(double raio) {
        this.raio = raio;
    }
    public Circulo(){
    }
    
    public double calcularArea(double raio) {
        double area = PI * Math.pow(raio, 2);
        return area;
    }
    public double calcularPeri(double raio){
        double area = 2 * PI * raio;
        return area;
    }

}
