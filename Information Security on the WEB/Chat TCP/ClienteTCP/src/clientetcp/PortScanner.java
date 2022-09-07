/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package clientetcp;

import java.io.IOException;
import java.io.PrintStream;
import java.net.Socket;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author gin
 */
public class PortScanner {
    
    private Socket cliente;

    public PortScanner() {
        
        List<Integer> portas = new ArrayList<>();
        
        for(int i=0; i<2000; i++){
        try {
            falar("127.0.0.1", i);
            
            portas.add(i);
            System.out.println("Porta "+i+" aceitando conexões");
        } catch (IOException ex) {
           // Logger.getLogger(ClienteTCP.class.getName()).log(Level.SEVERE, null, ex);
            //System.out.println("Porta "+i+" recusando conexões");
        }
        }
           
    }
    
    private void falar(String ip, Integer porta) throws IOException{
        
        
        cliente = new Socket(ip, porta);
        
        //System.out.println("conexão com o servidor "+ip+" estabelecida!");
        
        PrintStream remetente = new PrintStream( cliente.getOutputStream() );
        
        //Scanner sc = new Scanner( System.in );
        
        //while(sc.hasNextLine()){
            //remetente.println(sc.nextLine());    
        //}
        
        remetente.close();
        //sc.close();
        cliente.close();
        
        
    }
    
    public static void main(String[] args) {
        new PortScanner();
    }
    
    
    
}
