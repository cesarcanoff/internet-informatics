/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package servidortcp;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
import java.io.Writer;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.DefaultListModel;
import javax.swing.JList;

/**
 *
 * @author gin
 */
public class NovaConexao implements Runnable{

    private Socket entrada;
    JList<String> conversa;
    List<BufferedWriter> clients;
    
    

    public NovaConexao(Socket entrada, JList<String> conversa) {
        this.conversa = conversa;
        this.entrada  = entrada;
        
        clients = new ArrayList<>();
    }
    
    
    
    @Override
    public void run() {
        
        try {
            
            //BufferedReader sc = new BufferedReader(new InputStreamReader(entrada.getInputStream()));
            Scanner sc = new Scanner(entrada.getInputStream());
            
            //OutputStream out    = entrada.getOutputStream();
            //Writer w            = new OutputStreamWriter(out);
            //BufferedWriter bout = new BufferedWriter(w);
            
            //clients.add(bout);
            
            String ip = entrada.getInetAddress().getHostAddress();
            
            DefaultListModel<String> modelo = (DefaultListModel<String>) conversa.getModel();
            
        
            String linha;
            do{
                System.out.println("pronto pra ler? -> "+sc.hasNext());
                linha = sc.nextLine();
                String msg = "["+ip+"] disse: "+ linha;
                System.out.println(msg);
                
                //sendMsg(msg, bout);
                
                modelo.add(modelo.getSize(), msg);
                //conversa.repaint();
                
            }while( !"sair".equalsIgnoreCase(linha) && sc.hasNext() );
            
            //bout.close();
            //w.close();
            //out.close();
            
            sc.close();
            entrada.close();
            
            
            
        } catch (IOException ex) {
            Logger.getLogger(NovaConexao.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
    
    private void sendMsg(String msg, BufferedWriter atual) throws IOException{
        for(BufferedWriter bw: clients){
            if( bw != atual ){
                bw.write(msg);
                bw.flush();
            }
        }
    }
    
}
