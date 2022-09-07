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
public class Somador<E>{
    private E n1;
    private E n2;
    
    
    
    public Somador(E n1, E n2){
        this.n1 =n1;
        this.n2 =n2;
    }

    public E getN1() {
        return n1;
    }

    

    public E getN2() {
        return n2;
    }

    
    
    
}
