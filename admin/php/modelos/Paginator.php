<?php

class Paginator
{
    private $paginas;
    private $url;

    public function __construct($paginas, $url)
    {
        $this->paginas = $paginas;
        $this->url = $url;
    }

    // links()
    public function links()
    {
        // TODO
    }

    // prevAndNext()
    public function prevAndNext()
    {
        $prev = $this->getPrev();
        $next = $this->getNext();

        $html = '
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="'.$this->url.'?pagina='.$prev.'">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="'.$this->url.'?pagina='.$next.'">Next</a></li>
                </ul>
            </nav>
        ';

        echo $html;
    }


    public function numbers()
    {
        $html =  '
            <nav aria-label="Page navigation example">
                <ul class="pagination">
        ';
        
        for($i=1; $i<=$this->paginas; $i++) {
            $html .= '
                <li class="page-item">
                    <a class="page-link" href="'.$this->url.'?pagina='.$i.'">'.$i.'</a>
                </li>
            ';
        }

        $html .= '
                </ul>
            </nav>
        ';

        echo $html;
    }

    private function getPrev()
    {
        $currentPage = $_GET['pagina'];

        if ($currentPage > 1) {
            $currentPage--;
        }
        
        return $currentPage;
    }

    private function getNext()
    {
        $currentPage = $_GET['pagina'];

        if ($currentPage < $this->paginas) {
            $currentPage++;
        }

        return $currentPage;
    }
}
