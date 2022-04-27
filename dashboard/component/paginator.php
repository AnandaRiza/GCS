<nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                @if($paginator->hasPages())
              
                  @if($paginator->onFirstPage())
                  
                    <li class="page-item active">
                         <a class="page-link" href="#">{{$paginator->currentPage()}}</a>
                    </li>
                  <?php $i = $paginator->currentPage() + 1;
                  for ($i; $i <= $paginator->lastPage(); $i++){?>
                    <li class="page-item">
                        <a class="page-link" href="{{$paginator->url($i)}}">{{$i}}</a>
                    </li>
                  <?php } ?>
                    <li class="page-item">
                        <a class="page-link" href="{{$paginator->nextPageUrl()}}">
                        <i class="fas fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                        </a>
                    </li>

                  @elseif($paginator->hasMorePages())

                  <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <?php $k = $paginator->currentPage() - 1;?>
                    <li class="page-item">
                        <a class="page-link" href="{{$paginator->url($k)}}">{{$k}}</a>
                    </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">{{$paginator->currentPage()}}</a>
                  </li>
                  <?php $l = $paginator->currentPage() + 1;?>
                    <li class="page-item">
                        <a class="page-link" href="{{$paginator->url($l)}}">{{$l}}</a>
                    </li>
                  <li class="page-item">
                        <a class="page-link" href="{{$paginator->nextPageUrl()}}">
                        <i class="fas fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                        </a>
                   </li>

                  @else

                  <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <?php $m = $paginator->currentPage() - 2;
                  if($m != 0){?>
                    <li class="page-item">
                        <a class="page-link" href="{{$paginator->url($m)}}">{{$m}}</a>
                    </li>
                  <?php } $j = $paginator->currentPage() - 1;?>
                    <li class="page-item">
                        <a class="page-link" href="{{$paginator->url($j)}}">{{$j}}</a>
                    </li>
                  <li class="page-item active">
                         <a class="page-link" href="#">{{$paginator->currentPage()}}</a>
                  </li>

                  @endif
                  @endif
                </ul>
</nav>