package FormasGeométricas;

public class Retangulo {

    private double lado1;
    private double lado2;

    public Retangulo(double lado1, double lado2) {
        this.lado1 = lado1;
        this.lado2 = lado2;
    }

    public Retangulo() {
    }

    public double calcularArea(double lado1, double lado2) {
        double areaR = lado1 * lado2;
        return areaR;
    }

    public double calcularPeri(double lado1, double lado2) {
        double areaR = 2 * (lado1 + lado2);
        return areaR;
    }

}
