/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package exemplopolimorfismo;

import java.util.ArrayList;

/**
 *
 * @author gin
 */
public class Animal {
    String nome;
    
    public static void main(String[] args) {
        int[] vetorIdades = new int[10];
        
        vetorIdades[0] = 20;
        System.out.println(vetorIdades[0]);
        
        ArrayList<Integer> listaIdades 
                = new ArrayList<>();
               
        listaIdades.add(20);
        for(int i=0; i<listaIdades.size(); i++){
            System.out.println( listaIdades.get(i) );
        }
        
    }
    
}
