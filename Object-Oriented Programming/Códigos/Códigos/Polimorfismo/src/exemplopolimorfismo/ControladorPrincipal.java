/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package exemplopolimorfismo;

/**
 *
 * @author gin
 */
public class ControladorPrincipal {
    
    public static void main(String[] args) {
        Somador<Integer> somador1 = new Somador<Integer>(1,2);
        Somador<Float> somador2 = new Somador<Float>(1.0f, 2.0f);
        
        System.out.println(somador1.getN1()+somador1.getN2());
        
    }
    
}
