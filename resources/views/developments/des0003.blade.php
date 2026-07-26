<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>DougGS TI - &amp; Desenvolvimentos</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    @include('partials.header')
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url({{asset('img/blog-img/blog_douggs_img_page_des003.png')}});"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="page-content">
                        <h1><strong>Implementando eventos com o padrão Observers</strong></h1>

                        <p>O Padrão de Projeto Observer cria um relacionamento de um objeto notificador e muitos objetos que ficam observando-o para receber suas notificações quando o estado deste objeto mudar.
                        Simplificando, o padrão Observer permite que um objeto notifique outros objetos sobre alterações em seu estado.</p>
                        
                        <!-- <img src="{{ asset('img/blog-img/e91a63321f1745618d755ae3a495ed81.png') }}" alt=""> -->

                        <h6><strong>O que é um estado de um objeto?</strong></h6>
                        <p>Em um objeto normalmente você tem propriedade e métodos. Quando você atribui valores concretos às propriedades, temos um estado. Ou seja, o conjunto de valores dos atributos de um determinado objeto é chamado de estado. O acontecimento de determinado estado, no sistema, pode ser vinculado a um evento ou &#39;Subject&#39;. E, com sua ocorrência os observadores são acionados.</p>
                        
                        <h6><strong>Relação do Subject com os Observers</strong></h6>
                        <p>Complementando o diagrama UML do padrão Observer, existe uma segunda representação onde conseguimos ver claramente que temos um &#39;Subject&#39;, que conhece um ou muitos Observers e quando o estado do  Subject tiver uma modificação, os Observers serão notificados (executados). </p>
                        
                        <!-- <img src="{{ asset('img/blog-img/077cf45bc8ae4315b1abd258226ccdd8.png') }}" alt=""> -->

                        <p>Um exemplo muito bom para para você compreender o uso padrão Observer, são as ações de inscrições do Youtube. Quando você se inscreve, você e os demais inscritos se tornam Observers e o Youtube o Subject. A cada vídeo novo (mudança de estado), vocês são notificados automaticamente.</p>
                        <p>Muitos sistemas se utilizam desse padrão para, automaticamente, ficarem observando o acontecimentodo nos estados, na esperança de receberem uma notificação e onde o padrão é utilizado em larga escala.</p>
                        <p>A biblioteca Standard PHP Library(SPL) do PHP tem as interfaces para Subject (SplSubject) e Observer (SplObserver) que podemos utilizar normalmente. Essa biblioteca realmente tem muitos recursos úteis.</p>
                        
                        <h6><strong>Exemplo prático</strong></h6>
                        <p>Primeiro vamos criar nossos Value Objects para representar o Video e os Assinantes. Só uma observação. No momento em que formos criar um Vídeo, nós não vamos precisar trocar seu título em tempo de execução, com isso, para passar novos conceitos, vou definir sua propriedade como Readonly ou seja propriedade somente leitura, recurso do PHP 8.1 (Readonly Properties). </p>
                        <pre><code class="language-php">&lt;?php
declare(strict_types=1);
namespace Growthdev\DesignPatterns\Behavioral\Observer;
final class Video
{
    public readonly string $title;
    public function __construct(string $title)
    {
        $this-&gt;title = $title;
    }
}
                        </code></pre>
                        <p>Vou aproveitar o exemplo e passar mais um novo recurso. O PHP também permite que você declare diretamente uma propriedade na assinatura do construtor, ao invés da declaração explicita como propriedade, assim como fizemos na classe Video.</p>
                        <pre><code class="language-php">&lt;?php
declare(strict_types=1);
namespace Growthdev\DesignPatterns\Behavioral\Observer;
final class Subscriber
{
    public function __construct(
        public readonly string $email
    ) {}
}
                        </code></pre>
                        <p>Agora vamos criar o nosso objeto “observável” que terá seu estado observado. Vamos utilizar o SplObjecrStorage para construir nossa coleção de objetos observers.</p>
                        <pre><code class="language-php">&lt;?php
declare(strict_types=1);
namespace Growthdev\DesignPatterns\Behavioral\Observer;
use SplObjectStorage;
use SplObserver;
use SplSubject;
final class VideoObservable implements SplSubject
{   
    public readonly Video $video;
    private SplObjectStorage $observers;
    public function __construct(Video $video)
    {
        $this-&gt;video = $video;
        $this-&gt;observers = new SplObjectStorage();  
    }

    public function attach(SplObserver $observer): void
    {
        $this-&gt;observers-&gt;attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this-&gt;observers-&gt;detach($observer);
    }

    public function notify(): void
    {
        foreach ($this-&gt;observers as $observer) {
            $observer-&gt;update($this);
        }
    }    
}
                        </code></pre>
                        <p>Por fim vamos criar a classe para representar os nossos Observers</p>
                        <pre><code class="language-php">&lt;?php
declare(strict_types=1);
namespace Growthdev\DesignPatterns\Behavioral\Observer;
use SplObserver;
use SplSubject;
class VideoObserver implements SplObserver
{
    private Subscriber $subscriber;
    public function __construct(Subscriber $subscriber)
    {
        $this-&gt;subscriber = $subscriber;
    }

    public function update(SplSubject $subject): void
    {
        printf(
            &quot;%s has been notified of \&quot;%s\&quot;\n&quot;, 
            $this-&gt;subscriber-&gt;email, 
            $subject-&gt;video-&gt;title
        );
    }
}
                        </code></pre>
                        <p>Na implementação do teste, você conseguirá mesclar todos os recursos e compreender claramente a relação entre Subject e os Observers. Você tem o objeto Video, que se torna observável através do VideoObservable e você tem o observer, VideoObserver que está atrelado a alguma pessoa inscrita, Subscriber. Com isso, o VideoObservable cria uma estrutura contendo todos os Observers e pode tanto adicionar quanto remover. E no momento em que ele disparar a notificação, método notity, todos os Observers recebem a mensagem, exceto os removidos.</p>
                        <pre><code class="language-php">&lt;?php
declare(strict_types=1);
namespace Growthdev\DesignPatterns\Tests\Behavioral\Observer;
use Growthdev\DesignPatterns\Behavioral\Observer\Video;
use Growthdev\DesignPatterns\Behavioral\Observer\Subscriber;
use Growthdev\DesignPatterns\Behavioral\Observer\VideoObservable;
use Growthdev\DesignPatterns\Behavioral\Observer\VideoObserver;
use PHPUnit\Framework\TestCase;
final class VideoObservableTest extends TestCase
{
    public function testShouldCreateVideoObservers(): void
    {
        $video = new Video(&#39;Video: Create Obsever Pattern&#39;);

        $anaObserver = new VideoObserver(new Subscriber(&#39;ana@email.com.br&#39;));
        $mariaObserver = new VideoObserver(new Subscriber(&#39;maria@email.com.br&#39;));
        $walmirObserver = new VideoObserver(new Subscriber(&#39;walmir@email.com.br&#39;));
        $joaoObserver = new VideoObserver(new Subscriber(&#39;joao@email.com.br&#39;));
        $videoObservable = new VideoObservable($video);
        $videoObservable-&gt;attach($anaObserver);
        $videoObservable-&gt;attach($mariaObserver);
        $videoObservable-&gt;attach($walmirObserver);
        $videoObservable-&gt;attach($joaoObserver);
        // remove observer from list
        $videoObservable-&gt;detach($mariaObserver);
        $videoObservable-&gt;notify();
        $this-&gt;expectOutputString(
            &quot;ana@email.com.br has been notified of \&quot;Video: Create Obsever Pattern\&quot;\n&quot;
            . &quot;walmir@email.com.br has been notified of \&quot;Video: Create Obsever Pattern\&quot;\n&quot;
            . &quot;joao@email.com.br has been notified of \&quot;Video: Create Obsever Pattern\&quot;\n&quot;
        );
    }
}
                        </code></pre>

                        <h6><strong>Então, quando usar o padrão Observer?</strong></h6>
                        <p>Toda vez que você tiver um objeto, que a modificação do seu estado implicará modificações em outro. Ou seja, quando um objeto tem a necessidade de notificar outros objetos sobre a mudança do seu estado.</p>
                        <p>O Padrão de Projeto Observer tem um baixo acoplamento. Ou seja, por mais que ele tenha uma relação de 1 para “n” objetos,  ele  encapsula os aspectos separadamente. Com isso, permite-se a reutilização independente dos objetos.</p>

                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><a href="{{ url('/blogs/developments/des0003') }}" class="post-author">Douglas G. De Souza</a> on <a href="#" class="post-date">Mai 15, 2026 at 19:15 pm</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    @include('partials.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    @include('partials.js')
    <!-- jQuery (Necessary for All JavaScript Plugins) -->

</body>

</html>