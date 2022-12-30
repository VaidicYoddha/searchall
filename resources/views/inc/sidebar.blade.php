 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
              <!-- Search Card -->
              <div class="card bg-primary border border-light">
                <div class="card-body">
                <form action="{{ url('/search') }}" method="GET">
                    @csrf
                  <div class="input-group ">
                    <input name="search" type="text" class="form-control " placeholder="Search " />
                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                  </div>
                </form>
                </div>
              </div>


              <!-- Cagetories Card -->
              <div class="card ">
                <div class="card-header">
                  <h4 class="card-title">Cagetories</h4>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="collapse"><i data-feather="chevron-down"></i></a>
                        <a data-action="reload"><i data-feather="rotate-cw"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class=" mb-1">

                      <select class="select2 form-select" onchange="location.href=this.value;" id="select2-basic">

                            <option value=" "></option>

                      </select>
                    </div>

                    <h4 class="card-title">Top Cagetories </h4>
                    <ul class="list-group">

                        <li class="list-group-item d-flex align-items-center">
                        <span>
                         <a href="">

                        </a>
                        </span>
                        <span class="badge bg-primary badge-glow rounded-pill ms-auto">

                        </span>
                      </li>


                    </ul>
                  </div>
                </div>
              </div>

              <!-- Archive Card -->
              <div class="card ">
                <div class="card-header">
                  <h4 class="card-title">Archive</h4>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="collapse"><i data-feather="chevron-down"></i></a>
                        <a data-action="reload"><i data-feather="rotate-cw"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                     <!-- Archive dropdown -->
                    <div class=" mb-1">
                      <select class="select2 form-select" onchange="location.href=this.value;" id="select2-nested">
                           <option value="">Select</option>

                          <option value="">
                            </option>

                      </select>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Tag Card -->
              <div class="card ">
                <div class="card-header">
                  <h4 class="card-title">Tags</h4>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="collapse"><i data-feather="chevron-down"></i></a>
                        <a data-action="reload"><i data-feather="rotate-cw"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <h4>

                        <a href="">
                          <span href="" class="badge badge-glow bg-warning cursor-pointer mb-1">

                          </span>
                        </a>

                    </h4>
                  </div>
                </div>
              </div>

              <!-- Social Join Card -->
              <div class="card bg-gradient-warning border border-light">
                <div class="card-header">
                  <h4 class="card-title text-light fw-bolder">Join With Us</h4>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="collapse"><i data-feather="chevron-down"></i></a>
                        <a data-action="reload"><i data-feather="rotate-cw"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">

                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="https://www.facebook.com/vaidicyoddha" target="blank">
                        <button type="button" class="btn btn-outline-light" style="background-color: #4267B2;">
                          <i class="fab fa-facebook"></i>
                        </button>
                      </a>
                      <a href="https://twitter.com/vaidic_yoddha" target="blank">
                        <button type="button" class="btn btn-outline-light" style="background-color: #1DA1F2;">
                          <i class="fab fa-twitter"></i>
                        </button>
                      </a>
                      <a href="https://www.facebook.com/vaidicyoddha" target="blank">
                        <button type="button" class="btn btn-outline-light instagram">
                          <i class="fab fa-instagram"></i>
                        </button>
                      </a>
                      <a href="https://www.facebook.com/vaidicyoddha" target="blank">
                        <button type="button" class="btn btn-outline-light" style="background-color: #FF0000;">
                          <i class="fab fa-youtube"></i>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Recent Posts -->
              <div class="card ">
                <div class="card-header">
                  <h4 class="card-title">Recent Posts</h4>
                  <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <li>
                        <a data-action="collapse"><i data-feather="chevron-down"></i></a>
                        <a data-action="reload"><i data-feather="rotate-cw"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <div class="mt-75">

                      <div class="d-flex mb-2">
                        <a href="" class="me-2">
                          <img class="rounded" src="" width="100"
                            height="70" alt="Recent Post Pic" />
                        </a>
                        <div class="blog-info">
                          <h6 class="blog-recent-post-title">
                            <a href="" class="text-body-heading"></a>
                          </h6>
                          <div class="text-muted mb-0"></div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>


            </div>
