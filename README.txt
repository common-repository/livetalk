=== LiveTalk ===
Contributors: LiveTalk Chatbots
Tags: livetalk, chatbot, chat, bot
Requires at least: 5.0
Tested up to: 5.2
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Stable tag: 1.0.0

Adicione um chatbot LiveTalk em seu site Wordpress.

== Description ==
Os chatbots estão mudando a forma como as marcas se relacionam com os seus consumidores e podem agregar muitas vantagens à sua empresa.  Chatbots estão sempre disponíveis para interagir com o público 24hs por dia, nos 7 dias da semana. Chatbots não dormem. Um chatbot é capaz de reproduzir com perfeição o atendimento humano. Por esse motivo a utilização desse recurso entrega qualidade no atendimento suficiente a ponto de engajar os clientes, reduzir a taxa de abandono do site e gerar vendas!

Somos especialistas no desenvolvimento de chatbots. Nossa plataforma oferece automatização de conversas via chat, que conecte empresas e pessoas de forma natural, através de atendimento personalizado por inteligência artificial.

Acesse livetalk.ai

== Installation ==

1. Faça o download do arquivo zip do plugin. Extraia e faça o upload na pasta wp-content / plugins.
2. No painel wp-admin, acesse plugins e ative "LiveTalk"
3. Vá para a opção "LiveTalk" no menu e preencha o campo "token" com o token fornecido na integração wodpress em seu painel LiveTalk.
4. Salve e seu chatbot já estará ativado.

== Transmissão de dados ==
O plugin insere em todas as páginas de seu site WordPress um código JavaScript, hospedado em nosso painel de configuração de chatbots: https://app.livetalk.com.br que é responsavel por criar a interface de chat no seu site para que os visitantes possam interagir com o seu chatbot, sendo o mesmo um serviço para onde são enviados todos os dados capturados durante as conversas, configurando desta forma um serviço de terceiros.

* https://app.livetalk.com.br/client/lib/<seu token>/livetalk.min.js

Acima você pode ver a URL completa para o nosso serviço, sendo que <seu token> será substituido pelo token que você terá acesso através do nosso painel. É uma URL para um arquivo JavaScript que também pode ser usada em um site não WordPress, porém é claro existem diversos mecanismos para assegurar que o seu token não seja utilizado por pessoas não autorizadas e/ou em sites não autorizados.

Portanto existe uma transmissão de dados a partir do seu site para o nosso serviço, que graças a isso pode além de atender seus visitantes, armazenar conversas, gerar relatórios e capturar informações de contato que ficarão disponiveis de forma organizada para você. Nosso serviço também será capaz de:

1. Capturar o IP do usuário da conversa
2. Armazenar o endereço da página em que o usuário se encontra (caso seja um site)
3. Guardar o ID do usuário na página do Facebook configurada (caso esteja usando o chatbot através do Facebook)
4. Se o usuário concordar, poderá enviar notificações para o navegador do usuário através do OneSignal em até 24 horas (respeitando o limite de tempo imposto pelo Facebook) após o contato (caso o serviço seja ativado no painel)
5. Capturar outras informações de acordo com a conversa

Perceba que devido esse armazenamento de dados do usuário e de sua conversa, nosso serviço sempre será acionado. Todos os dados estão armazenados somente em nossos bancos de dados (exceto em casos de integração, veja sobre mais a frente) e protegidos por diversos mecanismos de segurança dos servidores da Digital Ocean.

Você ainda poderá integrar seu chatbot com outros serviços, entre em contato para saber quais serviços estão disponiveis, para citar alguns:

* C2S
* Gestão Real
* inGaia

Nesses casos onde você integrará com outros serviços a garantia de segurança e privacidade dos dados e de responsabilidade dos respectivos serviços.

Reforçando, esse comportamento configura o uso de serviço de terceiros, mesmo que nesse caso seja nosso proprio serviço, por isso é indispensavel que você tenha certeza de ler completamente nossos termos de uso e politicas de privacidade:

* Termos de uso

http://livetalk.ai/termos

* Politicas de privacidade

http://livetalk.ai/termos

== Changelog ==
= 1.0 =
* primeira versão