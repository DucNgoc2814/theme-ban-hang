@extends('client.master ')

@section('content')
    <div class="container-small">
      <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
          <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
          <li class="breadcrumb-item active" aria-current="page">Default</li>
        </ol>
      </nav>
      <div class="row align-items-center justify-content-between g-3 mb-4">
        <div class="col-auto">
          <h2 class="mb-0">Profile</h2>
        </div>
        <div class="col-auto">
          <div class="row g-2 g-sm-3">
            <div class="col-auto"><button class="btn btn-phoenix-danger"><span class="fas fa-trash-alt me-2"></span>Delete customer</button></div>
            <div class="col-auto"><button class="btn btn-phoenix-secondary"><span class="fas fa-key me-2"></span>Reset password</button></div>
          </div>
        </div>
      </div>
      <div class="row g-3 mb-6">
        <div class="col-12 col-lg-8">
          <div class="card h-100">
            <div class="card-body">
              <div class="border-bottom border-dashed pb-4">
                <div class="row align-items-center g-3 g-sm-5 text-center text-sm-start">
                  <div class="col-12 col-sm-auto"><input class="d-none" id="avatarFile" type="file" /><label class="cursor-pointer avatar avatar-5xl" for="avatarFile"><img class="rounded-circle" src="../../../assets/img/team/15.webp" alt="" /></label></div>
                  <div class="col-12 col-sm-auto flex-1">
                    <h3>Ansolo Lazinatov</h3>
                    <p class="text-body-secondary">Joined 3 months ago</p>
                    <div><a class="me-2" href="#!"><span class="fab fa-linkedin-in text-body-quaternary text-opacity-75 text-primary-hover"></span></a><a class="me-2" href="#!"><span class="fab fa-facebook text-body-quaternary text-opacity-75 text-primary-hover"></span></a><a href="#!"><span class="fab fa-twitter text-body-quaternary text-opacity-75 text-primary-hover"></span></a></div>
                  </div>
                </div>
              </div>
              <div class="d-flex flex-between-center pt-4">
                <div>
                  <h6 class="mb-2 text-body-secondary">Total Spent</h6>
                  <h4 class="fs-7 text-body-highlight mb-0">$894</h4>
                </div>
                <div class="text-end">
                  <h6 class="mb-2 text-body-secondary">Last Order</h6>
                  <h4 class="fs-7 text-body-highlight mb-0">1 week ago</h4>
                </div>
                <div class="text-end">
                  <h6 class="mb-2 text-body-secondary">Total Orders</h6>
                  <h4 class="fs-7 text-body-highlight mb-0">97 </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4">
          <div class="card h-100">
            <div class="card-body">
              <div class="border-bottom border-dashed">
                <h4 class="mb-3">Default Address<button class="btn btn-link p-0" type="button"> <span class="fas fa-edit fs-9 ms-3 text-body-quaternary"></span></button></h4>
              </div>
              <div class="pt-4 mb-7 mb-lg-4 mb-xl-7">
                <div class="row justify-content-between">
                  <div class="col-auto">
                    <h5 class="text-body-highlight">Address</h5>
                  </div>
                  <div class="col-auto">
                    <p class="text-body-secondary">Vancouver, British Columbia<br />Canada</p>
                  </div>
                </div>
              </div>
              <div class="border-top border-dashed pt-4">
                <div class="row flex-between-center mb-2">
                  <div class="col-auto">
                    <h5 class="text-body-highlight mb-0">Email</h5>
                  </div>
                  <div class="col-auto"><a class="lh-1" href="mailto:shatinon@jeemail.com">shatinon@jeemail.com</a></div>
                </div>
                <div class="row flex-between-center">
                  <div class="col-auto">
                    <h5 class="text-body-highlight mb-0">Phone</h5>
                  </div>
                  <div class="col-auto"><a href="tel:+1234567890">+1234567890</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="scrollbar">
          <ul class="nav nav-underline fs-9 flex-nowrap mb-3 pb-1" id="myTab" role="tablist">
            <li class="nav-item me-3"><a class="nav-link text-nowrap active" id="orders-tab" data-bs-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="true"><span class="fas fa-shopping-cart me-2"></span>Orders <span class="text-body-tertiary fw-normal"> (35)</span></a></li>
            <li class="nav-item me-3"><a class="nav-link text-nowrap" id="reviews-tab" data-bs-toggle="tab" href="#tab-reviews" role="tab" aria-controls="tab-orders" aria-selected="true"><span class="fas fa-star me-2"></span>Reviews<span class="text-body-tertiary fw-normal"> (24)</span></a></li>
            <li class="nav-item me-3"><a class="nav-link text-nowrap" id="wishlist-tab" data-bs-toggle="tab" href="#tab-wishlist" role="tab" aria-controls="tab-orders" aria-selected="true"><span class="fas fa-heart me-2"></span>Wishlist</a></li>
            <li class="nav-item me-3"><a class="nav-link text-nowrap" id="stores-tab" data-bs-toggle="tab" href="#tab-stores" role="tab" aria-controls="tab-stores" aria-selected="true"><span class="fas fa-home me-2"></span>Stores</a></li>
            <li class="nav-item"><a class="nav-link text-nowrap" id="personal-info-tab" data-bs-toggle="tab" href="#tab-personal-info" role="tab" aria-controls="tab-personal-info" aria-selected="true"><span class="fas fa-user me-2"></span>Personal info</a></li>
          </ul>
        </div>
        <div class="tab-content" id="profileTabContent">
          <div class="tab-pane fade show active" id="tab-orders" role="tabpanel" aria-labelledby="orders-tab">
            <div class="border-top border-bottom border-translucent" id="profileOrdersTable" data-list='{"valueNames":["order","status","delivery","date","total"],"page":6,"pagination":true}'>
              <div class="table-responsive scrollbar">
                <table class="table fs-9 mb-0">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle pe-3 ps-0" scope="col" data-sort="order" style="width:15%; min-width:140px">ORDER</th>
                      <th class="sort align-middle pe-3" scope="col" data-sort="status" style="width:15%; min-width:180px">STATUS</th>
                      <th class="sort align-middle text-start" scope="col" data-sort="delivery" style="width:20%; min-width:160px">DELIVERY METHOD</th>
                      <th class="sort align-middle pe-0 text-end" scope="col" data-sort="date" style="width:15%; min-width:160px">DATE</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="total" style="width:15%; min-width:160px">TOTAL</th>
                      <th class="align-middle pe-0 text-end" scope="col" style="width:15%;"> </th>
                    </tr>
                  </thead>
                  <tbody class="list" id="profile-order-table-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">#2453</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">Shipped</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Cash on delivery</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Dec 12, 12:56 PM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-highlight">$87</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">#2452</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-info"><span class="badge-label">Ready to pickup</span><span class="ms-1" data-feather="info" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Free shipping</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Dec 9, 2:28PM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-highlight">$7264</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">#2451</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Partially fulfilled</span><span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Local pickup</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Dec 4, 12:56 PM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-highlight">$375</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">#2450</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span class="badge-label">Canceled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Standard shipping</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Dec 1, 4:07 AM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-highlight">$657</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">#2449</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">fulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Express</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Nov 28, 7:28 PM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-highlight">$9562</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">#2448</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-danger"><span class="badge-label">Unfulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Local delivery</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Nov 24, 10:16 AM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-highlight">$256</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-body-tertiary text-opacity-85 pointers-events-none text-decoration-none" href="#!">#2447</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span class="badge-label">Cancelled</span><span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Standard shipping</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Nov 10, 12:00 PM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-tertiary text-opacity-85">$898</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-primary" href="#!">#2446</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">shipped</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Express</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Nov 12, 12:20 PM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-highlight">$4116</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="order align-middle white-space-nowrap py-2 ps-0"><a class="fw-semibold text-body-tertiary text-opacity-85 pointers-events-none text-decoration-none" href="#!">#2445</a></td>
                      <td class="status align-middle white-space-nowrap text-start fw-bold text-body-tertiary py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label">fulfilled</span><span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="delivery align-middle white-space-nowrap text-body py-2">Free shipping</td>
                      <td class="total align-middle text-body-tertiary text-end py-2">Oct 19, 1:20 PM</td>
                      <td class="date align-middle fw-semibold text-end py-2 text-body-tertiary text-opacity-85">$4116</td>
                      <td class="align-middle text-end white-space-nowrap pe-0 action py-2">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
            <div class="border-y" id="profileRatingTable" data-list='{"valueNames":["product","rating","review","status","date"],"page":6,"pagination":true}'>
              <div class="table-responsive scrollbar">
                <table class="table fs-9 mb-0">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:220px;" data-sort="product">PRODUCT</th>
                      <th class="sort align-middle" scope="col" data-sort="rating" style="max-width:10%;">RATING</th>
                      <th class="sort align-middle" scope="col" style="min-width:480px" data-sort="review">REVIEW</th>
                      <th class="sort align-middle" scope="col" style="max-width:12%;" data-sort="status">STATUS</th>
                      <th class="sort text-end align-middle" scope="col" style="max-width:10%;" data-sort="date">DATE</th>
                      <th class="sort text-end pe-0 align-middle" scope="col" style="width: 7%"> </th>
                    </tr>
                  </thead>
                  <tbody class="list" id="profile-review-table-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product pe-3"><a class="fw-semibold line-clamp-1" href="product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review pe-7">
                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">This Fitbit is fantastic! I was trying to be in better shape and needed some motivation, so I decided to treat myself to a new Fitbit.</p>
                      </td>
                      <td class="align-middle status pe-9"><span class="badge badge-phoenix fs-10 badge-phoenix-success">Approaved<span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-body-tertiary mb-0">Just now</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product pe-3"><a class="fw-semibold line-clamp-1" href="product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review pe-7">
                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">The order was delivered ahead of schedule. To give us additional time, you should leave the packaging sealed with plastic.</p>
                      </td>
                      <td class="align-middle status pe-9"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">Pending<span class="ms-1" data-feather="clock" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-body-tertiary mb-0">Dec 9, 2:28 PM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product pe-3"><a class="fw-semibold line-clamp-1" href="product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span></td>
                      <td class="align-middle review pe-7">
                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">It's a Mac, after all. Once you've gone Mac, there's no going back. My first Mac lasted over nine years, and this is my second.</p>
                      </td>
                      <td class="align-middle status pe-9"><span class="badge badge-phoenix fs-10 badge-phoenix-success">Approaved<span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-body-tertiary mb-0">Dec 4, 12:56 PM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product pe-3"><a class="fw-semibold line-clamp-1" href="product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review pe-7">
                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">Personally, I like the minimalist style, but I wouldn't choose it if I were searching for a computer that I would use frequently. It's not horrible in terms of speed and power</p>
                      </td>
                      <td class="align-middle status pe-9"><span class="badge badge-phoenix fs-10 badge-phoenix-success">Approaved<span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-body-tertiary mb-0">Nov 28, 7:28 PM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product pe-3"><a class="fw-semibold line-clamp-1" href="product-details.html">Razer Kraken v3 x Wired 7.1 Surroung Sound Gaming headset</a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review pe-7">
                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">It performs exactly as expected. There are three of these in the family.</p>
                      </td>
                      <td class="align-middle status pe-9"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">Cancelled<span class="ms-1" data-feather="x" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-body-tertiary mb-0">Nov 24, 10:16 AM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product pe-3"><a class="fw-semibold line-clamp-1" href="product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="align-middle review pe-7">
                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">The controller is quite comfy for me. Despite its increased size, the controller still fits well in my hands.</p>
                      </td>
                      <td class="align-middle status pe-9"><span class="badge badge-phoenix fs-10 badge-phoenix-success">Approaved<span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-body-tertiary mb-0">Just now</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle product pe-3"><a class="fw-semibold line-clamp-1" href="product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                      <td class="align-middle rating white-space-nowrap fs-10"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="align-middle review pe-7">
                        <p class="fw-semibold text-body-highlight mb-0 line-clamp-2">The response time and service I received when contacted the designers were Phenomenal!</p>
                      </td>
                      <td class="align-middle status pe-9"><span class="badge badge-phoenix fs-10 badge-phoenix-warning">Pending<span class="ms-1" data-feather="fas fa-stopwatch" style="height:12.8px;width:12.8px;"></span></span></td>
                      <td class="align-middle text-end date white-space-nowrap">
                        <p class="text-body-tertiary mb-0">Nov 07, 9:00 PM</p>
                      </td>
                      <td class="align-middle white-space-nowrap text-end pe-0">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
            <div class="border-y border-translucent" id="productWishlistTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
              <div class="table-responsive scrollbar">
                <table class="table fs-9 mb-0">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle fs-10" scope="col" style="width:7%;"></th>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="width:30%; min-width:250px;" data-sort="products">PRODUCTS</th>
                      <th class="sort align-middle" scope="col" data-sort="color" style="width:16%;">COLOR</th>
                      <th class="sort align-middle" scope="col" data-sort="size" style="width:10%;">SIZE</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:10%;">PRICE</th>
                      <th class="sort align-middle text-end pe-0" scope="col" style="width:35%;"> </th>
                    </tr>
                  </thead>
                  <tbody class="list" id="profile-wishlist-table-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/1.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Pure matte black</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">42</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$57</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/7.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">2021 Apple 12.9-inch iPad Pro (Wi‑Fi, 128GB) - Space Gray</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Black</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">Pro</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$1,499</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/6.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">PlayStation 5 DualSense Wireless Controller</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">White</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">Regular</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$299</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/3.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Space Gray</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">Pro</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$1,699</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/4.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">Apple iMac 24&quot; 4K Retina Display M1 8 Core CPU, 7 Core GPU, 256GB SSD, Green (MJV83ZP/A) 2021</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Ocean Blue</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">21&quot;</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$65</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/10.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">Apple Magic Mouse (Wireless, Rechargable) - Silver</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">White</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">Regular</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$30</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/8.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">Amazon Basics Matte Black Wired Keyboard - US Layout (QWERTY)</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Black</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">MD</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$40</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/12.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">HORI Racing Wheel Apex for PlayStation 4_3, and PC</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Black</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">45</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$130</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a class="border border-translucent rounded-2 d-inline-block" href="product-details.html"><img src="../../../assets/img/products/17.png" alt="" width="53" /></a></td>
                      <td class="products align-middle pe-11"><a class="fw-semibold mb-0 line-clamp-1" href="product-details.html">Xbox Series S</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body">Space Gray</td>
                      <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">sm</td>
                      <td class="price align-middle text-body fs-9 fw-semibold text-end">$99</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end text-nowrap pe-0"><button class="btn btn-sm text-body-quaternary text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button><button class="btn btn-primary fs-10"><span class="fas fa-shopping-cart me-1 fs-10"></span>Add to cart</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-stores" role="tabpanel" aria-labelledby="wishlist-tab">
            <div class="border-y border-translucent mb-6" id="profileStoreTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":5,"pagination":true}'>
              <div class="table-responsive scrollbar">
                <table class="table table-sm fs-9 mb-0">
                  <thead>
                    <tr>
                      <th class="sort white-space-nowrap align-middle fs-10" scope="col" style="width:7%; min-width:80px;"></th>
                      <th class="sort white-space-nowrap align-middle" scope="col" style="width:20%; min-width:150px;" data-sort="products">VENDOR</th>
                      <th class="sort align-middle" scope="col" data-sort="color" style="width:15%; min-width:150px;">STORE RATING</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:12%; min-width:150px;">ORDERS</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="size" style="width:15%; min-width:150px;">TOTAL SPENT</th>
                      <th class="sort align-middle text-end" scope="col" data-sort="price" style="width:15%; min-width:150px;">LAST ORDER</th>
                      <th class="sort align-middle text-end pe-0" scope="col" style="width:30%; min-width:150px;"> </th>
                    </tr>
                  </thead>
                  <tbody class="list" id="profile-stores-table-body">
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a href="#!"> <img src="../../../assets/img/brand2/dell.png" alt="" width="53" /></a></td>
                      <td class="products align-middle"><a class="fw-semibold mb-0" href="#!">Dell Technologies</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></td>
                      <td class="size align-middle white-space-nowrap text-primary fs-9 fw-bold text-end">3</td>
                      <td class="price align-middle text-end text-body fw-semibold">$ 23987</td>
                      <td class="price align-middle text-body-tertiary fs-9 text-end">Dec 12, 12:56 PM</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a href="#!"> <img src="../../../assets/img/brand2/honda.png" alt="" width="53" /></a></td>
                      <td class="products align-middle"><a class="fw-semibold mb-0" href="#!">Honda</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="size align-middle white-space-nowrap text-primary fs-9 fw-bold text-end">5</td>
                      <td class="price align-middle text-end text-body fw-semibold">$ 1250</td>
                      <td class="price align-middle text-body-tertiary fs-9 text-end">Dec 09, 10:48 AM</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a href="#!"> <img src="../../../assets/img/brand2/xiaomi.png" alt="" width="53" /></a></td>
                      <td class="products align-middle"><a class="fw-semibold mb-0" href="#!">Xiaomi</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="size align-middle white-space-nowrap text-primary fs-9 fw-bold text-end">6</td>
                      <td class="price align-middle text-end text-body fw-semibold">$ 360</td>
                      <td class="price align-middle text-body-tertiary fs-9 text-end">Dec 03, 05:45 PM</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a href="#!"> <img src="../../../assets/img/brand/huawei.png" alt="" width="53" /></a></td>
                      <td class="products align-middle"><a class="fw-semibold mb-0" href="#!">Huawei Shop BD</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="size align-middle white-space-nowrap text-primary fs-9 fw-bold text-end">1</td>
                      <td class="price align-middle text-end text-body fw-semibold">$1,799</td>
                      <td class="price align-middle text-body-tertiary fs-9 text-end">Nov 27, 06:20 PM</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      <td class="align-middle white-space-nowrap ps-0 py-0"><a href="#!"> <img src="../../../assets/img/brand2/intel-2.png" alt="" width="53" /></a></td>
                      <td class="products align-middle"><a class="fw-semibold mb-0" href="#!">Intel</a></td>
                      <td class="color align-middle white-space-nowrap fs-9 text-body"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></td>
                      <td class="size align-middle white-space-nowrap text-primary fs-9 fw-bold text-end">2</td>
                      <td class="price align-middle text-end text-body fw-semibold">$65</td>
                      <td class="price align-middle text-body-tertiary fs-9 text-end">Nov 21, 10:25 AM</td>
                      <td class="total align-middle fw-bold text-body-highlight text-end">
                        <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                          <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
            <div class="d-flex flex-between-center mb-5">
              <div>
                <h3 class="text-body-emphasis mb-2">My Favourite Stores</h3>
                <h5 class="text-body-tertiary fw-semibold">Essential for a better life</h5>
              </div><button class="btn btn-phoenix-primary">View all</button>
            </div>
            <div class="row gx-3 gy-5">
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/dell.png" alt="Dell Technologies" /></div>
                <h5 class="mb-2">Dell Technologies</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1263 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/hp.png" alt="HP Global Store" /></div>
                <h5 class="mb-2">HP Global Store</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(365 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/honda.png" alt="Honda" /></div>
                <h5 class="mb-2">Honda</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(596 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/asus-rog.png" alt="Asus ROG" /></div>
                <h5 class="mb-2">Asus ROG</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(2365 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/yamaha.png" alt="Yamaha" /></div>
                <h5 class="mb-2">Yamaha</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1253 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/ibm.png" alt="IBM" /></div>
                <h5 class="mb-2">IBM</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(996 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/apple-2.png" alt="Apple Store" /></div>
                <h5 class="mb-2">Apple Store</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(365 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/oppo.png" alt="Oppo" /></div>
                <h5 class="mb-2">Oppo</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(576 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/redragon.png" alt="Redragon" /></div>
                <h5 class="mb-2">Redragon</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1125 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/xbox.png" alt="Microsoft XBOX" /></div>
                <h5 class="mb-2">Microsoft XBOX</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(830 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/lenovo.png" alt="Lenovo" /></div>
                <h5 class="mb-2">Lenovo</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(1032 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3 col-lg-2 hover-actions-trigger btn-reveal-trigger">
                <div class="border border-translucent d-flex flex-center rounded-3 mb-3 p-4" style="height:180px;"><img class="mw-100" src="../../../assets/img/brand2/xiaomi.png" alt="Xiaomi" /></div>
                <h5 class="mb-2">Xiaomi</h5>
                <div class="mb-1 fs-9"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span><span class="fa-regular fa-star text-warning-light" data-bs-theme="light"></span></div>
                <p class="text-body-quaternary fs-9 mb-2 fw-semibold">(965 people rated)</p><a class="btn btn-link p-0" href="#!">Visit Store<span class="fas fa-chevron-right ms-1 fs-10"></span></a>
                <div class="hover-actions top-0 end-0 mt-2 me-3">
                  <div class="btn-reveal-trigger"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal lh-1 bg-body-highlight rounded-1" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-9"></span></button>
                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-personal-info" role="tabpanel" aria-labelledby="personal-info-tab">
            <div class="row gx-3 gy-4 mb-5">
              <div class="col-12 col-lg-6"><label class="form-label text-body-highlight fs-8 ps-0 text-capitalize lh-sm" for="fullName">Full name</label><input class="form-control" id="fullName" type="text" placeholder="Full name" /></div>
              <div class="col-12 col-lg-6"><label class="form-label text-body-highlight fs-8 ps-0 text-capitalize lh-sm" for="gender">Gender</label><select class="form-select" id="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="non-binary">Non-binary</option>
                  <option value="not-to-say">Prefer not to say</option>
                </select></div>
              <div class="col-12 col-lg-6"><label class="form-label text-body-highlight fs-8 ps-0 text-capitalize lh-sm" for="email">Email</label><input class="form-control" id="email" type="text" placeholder="Email" /></div>
              <div class="col-12 col-lg-6">
                <div class="row g-2 gy-lg-0"><label class="form-label text-body-highlight fs-8 ps-1 text-capitalize lh-sm mb-1">Date of birth</label>
                  <div class="col-6 col-sm-2 col-lg-3 col-xl-2"><select class="form-select" id="date">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                    </select></div>
                  <div class="col-6 col-sm-2 col-lg-3 col-xl-2"><select class="form-select" id="month">
                      <option value="Jan">Jan</option>
                      <option value="Feb">Feb</option>
                      <option value="Mar">Mar</option>
                      <option value="Apr">Apr</option>
                      <option value="May">May</option>
                      <option value="Jun">Jun</option>
                      <option value="Jul">Jul</option>
                      <option value="Aug">Aug</option>
                      <option value="Sep">Sep</option>
                      <option value="Oct">Oct</option>
                      <option value="Nov">Nov</option>
                      <option value="Dec">Dec</option>
                    </select></div>
                  <div class="col-12 col-sm-8 col-lg-6 col-xl-8"><select class="form-select" id="year">
                      <option value="1990">1990</option>
                      <option value="1991">1991</option>
                      <option value="1992">1992</option>
                      <option value="1993">1993</option>
                      <option value="1994">1994</option>
                      <option value="1995">1995</option>
                      <option value="1996">1996</option>
                      <option value="1997">1997</option>
                      <option value="1998">1998</option>
                      <option value="1999">1999</option>
                      <option value="2000">2000</option>
                      <option value="2001">2001</option>
                      <option value="2002">2002</option>
                      <option value="2003">2003</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                    </select></div>
                </div>
              </div>
              <div class="col-12 col-lg-6"><label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="phone">Phone</label><input class="form-control" id="phone" type="text" placeholder="+1234567890" /></div>
              <div class="col-12 col-lg-6"><label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="alternative_phone">Alternative phone</label><input class="form-control" id="alternative_phone" type="text" placeholder="+1234567890" /></div>
              <div class="col-12 col-lg-4"><label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="facebook">Facebook</label><input class="form-control" id="facebook" type="text" placeholder="Facebook" /></div>
              <div class="col-12 col-lg-4"><label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="instagram">Instagram</label><input class="form-control" id="instagram" type="text" placeholder="Instagram" /></div>
              <div class="col-12 col-lg-4"><label class="form-label text-body-highlight fw-bold fs-8 ps-0 text-capitalize lh-sm" for="twitter">Twitter</label><input class="form-control" id="twitter" type="text" placeholder="Twitter" /></div>
            </div>
            <div class="text-end"><button class="btn btn-primary px-7">Save changes</button></div>
          </div>
        </div>
      </div>
    </div><!-- end of .container-->
@endsection
