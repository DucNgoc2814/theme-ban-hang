@extends('client.master')
@section('content')
<div class="container-small">
    <nav class="mb-3" aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
        <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
        <li class="breadcrumb-item active" aria-current="page">Default</li>
      </ol>
    </nav>
    <h2 class="mb-5">Check out</h2>
    <div class="row justify-content-between">
      <div class="col-lg-7 col-xl-7">
        <form>
          <div class="d-flex align-items-end">
            <h3 class="mb-0 me-3">Shipping Details</h3><button class="btn btn-link p-0" type="button">Edit</button>
          </div>
          <table class="table table-borderless mt-4">
            <tbody>
              <tr>
                <td class="py-2 ps-0">
                  <div class="d-flex"><span class="fs-3 me-2" data-feather="user" style="height:16px; width:16px;"> </span>
                    <h5 class="lh-sm me-4">Name</h5>
                  </div>
                </td>
                <td class="py-2 fw-bold lh-sm">:</td>
                <td class="py-2 px-3">
                  <h5 class="lh-sm fw-normal text-body-secondary">Shatinon Mekalan</h5>
                </td>
              </tr>
              <tr>
                <td class="py-2 ps-0">
                  <div class="d-flex"><span class="fs-3 me-2" data-feather="home" style="height:16px; width:16px;"> </span>
                    <h5 class="lh-sm me-4">Address</h5>
                  </div>
                </td>
                <td class="py-2 fw-bold lh-sm">:</td>
                <td class="py-2 px-3">
                  <h5 class="lh-lg fw-normal text-body-secondary">Apt: 6/B, 192 Edsel Road, Van Nuys <br> California, USA 96580</h5>
                </td>
              </tr>
              <tr>
                <td class="py-2 ps-0">
                  <div class="d-flex"><span class="fs-3 me-2" data-feather="phone" style="height:16px; width:16px;"> </span>
                    <h5 class="lh-sm me-4">Phone</h5>
                  </div>
                </td>
                <td class="py-2 fw-bold lh-sm">: </td>
                <td class="py-2 px-3">
                  <h5 class="lh-sm fw-normal text-body-secondary">818-414-4092</h5>
                </td>
              </tr>
            </tbody>
          </table>
          <hr class="my-6">
          <h3>Billing Details</h3>
          <div class="form-check"><input class="form-check-input" id="sameAsShipping" type="checkbox" checked="checked" /><label class="form-check-label fs-8 fw-normal" for="sameAsShipping">Same as shipping address
            </label></div>
          <table class="table table-borderless mt-4">
            <tbody>
              <tr>
                <td class="py-2 ps-0">
                  <div class="d-flex"><span class="fs-3 me-2" data-feather="user" style="height:16px; width:16px;"> </span>
                    <h5 class="lh-sm me-4">Name</h5>
                  </div>
                </td>
                <td class="py-2 fw-bold lh-sm">:</td>
                <td class="py-2 px-3">
                  <h5 class="lh-sm fw-normal text-body-secondary">Shatinon Mekalan</h5>
                </td>
              </tr>
              <tr>
                <td class="py-2 ps-0">
                  <div class="d-flex"><span class="fs-3 me-2" data-feather="home" style="height:16px; width:16px;"> </span>
                    <h5 class="lh-sm me-4">Address</h5>
                  </div>
                </td>
                <td class="py-2 fw-bold lh-sm">:</td>
                <td class="py-2 px-3">
                  <h5 class="lh-lg fw-normal text-body-secondary">Apt: 6/B, 192 Edsel Road, Van Nuys <br> California, USA 96580</h5>
                </td>
              </tr>
              <tr>
                <td class="py-2 ps-0">
                  <div class="d-flex"><span class="fs-3 me-2" data-feather="phone" style="height:16px; width:16px;"> </span>
                    <h5 class="lh-sm me-4">Phone</h5>
                  </div>
                </td>
                <td class="py-2 fw-bold lh-sm">:</td>
                <td class="py-2 px-3">
                  <h5 class="lh-sm fw-normal text-body-secondary">818-414-4092</h5>
                </td>
              </tr>
            </tbody>
          </table>
          <hr class="my-6">
          <h3 class="mb-5">Delivery Type</h3>
          <div class="row gy-6">
            <div class="col-12 col-md-6">
              <div class="d-flex flex-wrap align-items-center mb-3">
                <div class="form-check mb-0"><input class="form-check-input" type="radio" name="shippingRadio" id="free_shipping" /><label class="form-check-label fs-8 text-body" for="free_shipping">Free Shipping</label></div><span class="d-inline-block text-body-emphasis fw-bold ms-2">$0.00</span>
              </div>
              <div class="ps-4">
                <h6 class="text-body-tertiary mb-2">Est. delivery: Jun 21 – Jul 20</h6>
                <h6 class="text-info lh-base mb-0">Get Free Shipped products in Time!</h6>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex flex-wrap align-items-center mb-3">
                <div class="form-check mb-0"><input class="form-check-input" type="radio" name="shippingRadio" id="two_days_shipping" /><label class="form-check-label fs-8 text-body" for="two_days_shipping">Two days Shipping</label></div><span class="d-inline-block text-body-emphasis fw-bold ms-2">$20.00</span>
              </div>
              <div class="ps-4">
                <h6 class="text-body-tertiary mb-2">Est. delivery: Jun 21 – Jul 20</h6>
                <h6 class="text-info lh-base mb-0">Everything faster with minimum shipping fee.</h6>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex flex-wrap align-items-center mb-3">
                <div class="form-check mb-0"><input class="form-check-input" type="radio" name="shippingRadio" id="standard_shipping" /><label class="form-check-label fs-8 text-body" for="standard_shipping">Standard Shipping</label></div><span class="d-inline-block text-body-emphasis fw-bold ms-2">$10.00</span>
              </div>
              <div class="ps-4">
                <h6 class="text-body-tertiary mb-2">Est. delivery: Jun 21 – Jul 20</h6>
                <h6 class="text-info lh-base mb-0">Get timely delivery with economy shipping.</h6>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="d-flex flex-wrap align-items-center mb-3">
                <div class="form-check mb-0"><input class="form-check-input" type="radio" name="shippingRadio" checked="checked" id="one_day_shipping" /><label class="form-check-label fs-8 text-body" for="one_day_shipping">One day Shipping</label></div><span class="d-inline-block text-body-emphasis fw-bold ms-2">$30.00</span><span class="badge badge-phoenix badge-phoenix-warning ms-2 ms-lg-4 ms-xl-2">Popular</span>
              </div>
              <div class="ps-4">
                <h6 class="text-body-tertiary mb-2">Est. delivery: Jun 21 – Jul 20</h6>
                <h6 class="text-info lh-base mb-0">Highest priority shipping at the lowest cost.</h6>
              </div>
            </div>
          </div>
          <hr class="my-6">
          <h3 class="mb-5">Payment Method</h3>
          <div class="row g-4 mb-7">
            <div class="col-12">
              <div class="row gx-lg-11">
                <div class="col-md-auto">
                  <div class="form-check"><input class="form-check-input" id="creditCard" type="radio" name="paymentMethod" checked="checked" /><label class="form-check-label fs-8 text-body text-nowrap d-flex gap-2" for="creditCard">Credit card<img class="h-100" src="../../../assets/img/logos/visa.png" alt="" /><img class="h-100" src="../../../assets/img/logos/discover.png" alt="" /><img class="h-100" src="../../../assets/img/logos/mastercard.png" alt="" /><img class="h-100" src="../../../assets/img/logos/american_express.png" alt="" /></label></div>
                </div>
                <div class="col-12 col-md-auto">
                  <div class="form-check"><input class="form-check-input" id="paypal" type="radio" name="paymentMethod" /><label class="form-check-label fs-8 text-body" for="paypal">Paypal </label></div>
                </div>
                <div class="col-12 col-md-auto">
                  <div class="form-check"><input class="form-check-input" id="coupon" type="radio" name="paymentMethod" /><label class="form-check-label fs-8 text-body" for="coupon">Coupon </label></div>
                </div>
              </div>
            </div>
            <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="selectCard">Select card</label><select class="form-select text-body-emphasis" id="selectCard">
                <option selected="selected">Select a card</option>
                <option value="visa">Visa</option>
                <option value="discover">Discover</option>
                <option value="mastercard">Mastercard</option>
                <option value="american-express">American Express</option>
              </select></div>
            <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputCardNumber">Card number</label><input class="form-control" id="inputCardNumber" type="number" placeholder="Enter card number" aria-label="Card number" /></div>
            <div class="col-12"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputName">Full name</label><input class="form-control" id="inputName" type="text" placeholder="Ansolo Lazinatov" aria-label="Full name" /></div>
            <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none">Expires on</label>
              <div class="d-flex"><select class="form-select text-body-emphasis me-3">
                  <option selected="selected">Month</option>
                  <option>January</option>
                  <option>February</option>
                  <option>March</option>
                </select><select class="form-select text-body-emphasis">
                  <option selected="selected">Year</option>
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
            <div class="col-md-6"><label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputCardCVC">CVC</label><input class="form-control" id="inputCardCVC" type="number" placeholder="Enter a valid CVC" aria-label="CVC" /></div>
            <div class="col-12">
              <div class="form-check"><input class="form-check-input" id="gridCheck" type="checkbox" /><label class="form-check-label text-body-emphasis fs-8" for="gridCheck">Save Card Details</label></div>
            </div>
          </div>
          <div class="row g-2 mb-5 mb-lg-0">
            <div class="col-md-8 col-lg-9 d-grid"><button class="btn btn-primary" type="submit">Pay $695.20</button></div>
            <div class="col-md-4 col-lg-3 d-grid"><button class="btn btn-phoenix-secondary text-nowrap" type="submit">Save Order and Exit</button></div>
          </div>
        </form>
      </div>
      <div class="col-lg-5 col-xl-4">
        <div class="card mt-3 mt-lg-0">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
              <h3 class="mb-0">Summary</h3><button class="btn btn-link pe-0" type="button">Edit cart</button>
            </div>
            <div class="border-dashed border-bottom border-translucent mt-4">
              <div class="ms-n2">
                <div class="row align-items-center mb-2 g-3">
                  <div class="col-8 col-md-7 col-lg-8">
                    <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/1.png" width="40" alt="" />
                      <h6 class="fw-semibold text-body-highlight lh-base">Fitbit Sense Advanced Smartwatch with... </h6>
                    </div>
                  </div>
                  <div class="col-2 col-md-3 col-lg-2">
                    <h6 class="fs-10 mb-0">x1</h6>
                  </div>
                  <div class="col-2 ps-0">
                    <h5 class="mb-0 fw-semibold text-end">$398</h5>
                  </div>
                </div>
                <div class="row align-items-center mb-2 g-3">
                  <div class="col-8 col-md-7 col-lg-8">
                    <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/2.png" width="40" alt="" />
                      <h6 class="fw-semibold text-body-highlight lh-base">iPhone 13 pro max-Pacific Blue-128GB </h6>
                    </div>
                  </div>
                  <div class="col-2 col-md-3 col-lg-2">
                    <h6 class="fs-10 mb-0">x1</h6>
                  </div>
                  <div class="col-2 ps-0">
                    <h5 class="mb-0 fw-semibold text-end">$398</h5>
                  </div>
                </div>
                <div class="row align-items-center mb-5 g-3">
                  <div class="col-8 col-md-7 col-lg-8">
                    <div class="d-flex align-items-center"><img class="me-2 ms-1" src="../../../assets/img/products/3.png" width="40" alt="" />
                      <h6 class="fw-semibold text-body-highlight lh-base">Apple MacBook Pro 13 inch-M1-8/256GB</h6>
                    </div>
                  </div>
                  <div class="col-2 col-md-3 col-lg-2">
                    <h6 class="fs-10 mb-0">x1</h6>
                  </div>
                  <div class="col-2 ps-0">
                    <h5 class="mb-0 fw-semibold text-end">$65</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="border-dashed border-bottom border-translucent mt-4">
              <div class="d-flex justify-content-between mb-2">
                <h5 class="text-body fw-semibold">Items subtotal: </h5>
                <h5 class="text-body fw-semibold">$691</h5>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <h5 class="text-body fw-semibold">Discount: </h5>
                <h5 class="text-danger fw-semibold">-$59</h5>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <h5 class="text-body fw-semibold">Tax: </h5>
                <h5 class="text-body fw-semibold">$126.20</h5>
              </div>
              <div class="d-flex justify-content-between mb-2">
                <h5 class="text-body fw-semibold">Subtotal </h5>
                <h5 class="text-body fw-semibold">$665</h5>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <h5 class="text-body fw-semibold">Shipping Cost </h5>
                <h5 class="text-body fw-semibold">$30 </h5>
              </div>
            </div>
            <div class="d-flex justify-content-between border-dashed-y pt-3">
              <h4 class="mb-0">Total :</h4>
              <h4 class="mb-0">$695.20</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection