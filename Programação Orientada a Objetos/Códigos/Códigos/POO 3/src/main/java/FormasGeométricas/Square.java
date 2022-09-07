package FormasGeométricas;

public class Square {

    private double lado1;

    public Square(double lado1) {
        this.lado1 = lado1;
    }
    public Square(){
    }

    public double calcularArea(double lado) {
        double area = lado * lado;
        return area;
    }

    public double calcularPeri(double lado) {
        double area = lado + lado + lado + lado;
        return area;
    }

}
