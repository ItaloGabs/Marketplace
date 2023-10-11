<?php /* Template Name: ProfilePage */ ?>
<?php get_header(); ?>
<section class="body">
    <div class="container"> 
    <div class="shadow"></div>
    <div class="squish">
        <h1 id="text-3d-loading" data-3d-text> </h1>
    </div>
    <div class="particles">
        <div class="floor"></div>
        <div class="air"></div>
    </div>
    </div> 
</section>
<main class="profile-content">
  <section class="profile-area default-centralize">
    <div class="profile-banner">
      <div class="banner-color">
        <div class="banner-image-area"></div>
      </div>
      <div class="banner-user-data">
        <p class="profile-user-name">Abelardo Texeira</p>
        <div class="profile-user-contact">
          <div class="profile-contact">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M2.33301 14C2.33301 9.60021 2.33301 7.40033 3.69984 6.03349C5.06668 4.66666 7.26656 4.66666 11.6663 4.66666H16.333C20.7327 4.66666 22.9327 4.66666 24.2995 6.03349C25.6663 7.40033 25.6663 9.60021 25.6663 14C25.6663 18.3997 25.6663 20.5997 24.2995 21.9665C22.9327 23.3333 20.7327 23.3333 16.333 23.3333H11.6663C7.26656 23.3333 5.06668 23.3333 3.69984 21.9665C2.33301 20.5997 2.33301 18.3997 2.33301 14Z" stroke="#C8C8C8" stroke-width="1.5"/>
              <path d="M7 9.33334L9.51872 11.4323C11.6615 13.2179 12.7329 14.1107 14 14.1107C15.2671 14.1107 16.3386 13.2179 18.4813 11.4323L21 9.33334" stroke="#C8C8C8" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <p>emailqualquer@seila.com</p>
          </div>
          <div class="profile-contact">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.333 2.33334C16.333 2.33334 18.8997 2.56668 22.1663 5.83334C25.433 9.10001 25.6663 11.6667 25.6663 11.6667" stroke="#C8C8C8" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M16.5752 6.45825C16.5752 6.45825 17.7302 6.78824 19.4626 8.52065C21.195 10.2531 21.525 11.408 21.525 11.408" stroke="#C8C8C8" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M11.7109 6.20219L12.468 7.55894C13.1513 8.78333 12.8771 10.3895 11.8008 11.4658C11.8008 11.4658 10.4955 12.7713 12.8622 15.1381C15.2282 17.5041 16.5346 16.1995 16.5346 16.1995C17.6108 15.1233 19.217 14.849 20.4414 15.5323L21.7981 16.2895C23.647 17.3213 23.8653 19.9141 22.2403 21.5392C21.2638 22.5157 20.0675 23.2756 18.745 23.3256C16.5189 23.4101 12.7383 22.8467 8.94598 19.0543C5.15365 15.262 4.59024 11.4814 4.67464 9.25526C4.72477 7.93286 5.48459 6.73659 6.46111 5.76009C8.08621 4.13498 10.679 4.35334 11.7109 6.20219Z" stroke="#C8C8C8" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <p>(82) 94002-8922</p>
          </div>
        </div>
      </div>
    </div>
    <div class="profile-tabs">
      <div class="profile-tab active">
        <button class="tab-button">Editar Conta</button>
      </div>
      <div class="profile-tab">
        <button class="tab-button">Pedidos</button>
      </div>
      <div class="profile-tab">
        <button class="tab-button">Gerenciador de senha</button>
      </div>
      
    </div>
    <section class="profile-body">
      <section class="edit-profile-form">
        <div class="edit-profile-form-box">
          <div class="form-name-area">
            <div class="form-input">
              <label class="input-label" for="endereco">Nome Completo*</label>
              <input type="text" id="endereco">
            </div>
          </div>
          <div class="form-contact-area">
            <div class="form-input">
              <label class="input-label" for="endereco">Email*</label>
              <input type="text" id="endereco">
            </div>
            <div class="form-input">
              <label class="input-label" for="endereco">Celular*</label>
              <input type="text" id="endereco">
            </div>
          </div>
          <div class="form-address-area">
            <div class="form-input">
              <label class="input-label" for="endereco">Endereco*</label>
              <input type="text" id="endereco">
            </div>
            <div class="form-complement-cep-area">
              <div class="form-input">
                <label class="input-label" for="endereco">Complemento*</label>
                <input type="text" id="endereco">
              </div>
              <div class="form-input">
                <label class="input-label" for="endereco">Cep*</label>
                <input type="text" id="endereco">
              </div>
            </div>
            <div class="form-state-city-area">
              <div class="form-input">
                <label class="input-label" for="endereco">Estado*</label>
                <input type="text" id="endereco">
              </div>
              <div class="form-input">
                <label class="input-label" for="endereco">Cidade*</label>
                <input type="text" id="endereco">
              </div>
            </div>
          </div>
          <div class="save-changes-button">
            <button class="save-button">Salvar</button>
          </div>
        </div>
      </section>
      <section class="profile-orders">
        <div class="profile-orders-box">
          <div class="order-search-bar"></div>

          <!-- <section class="order-list">
            <div class="order-list-header">
              <p>Order ID</p>
              <p>Data</p>
              <p>Total</p>
              <p>Status</p>
              <p>Comprovante</p>
            </div>
            <div class="order-list-line accordion">
              <div class="order-info">
                <p>#14589</p>
                <p>09/08/2002</p>
                <p>XX</p>
                <p>Concluído</p>
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.5475 2.33333H8.45252C7.1005 2.33333 6.42449 2.33333 5.87929 2.52304C4.84542 2.88279 4.03373 3.71839 3.68427 4.7827C3.5 5.34397 3.5 6.03989 3.5 7.43174V23.7699C3.5 24.7711 4.64917 25.3024 5.37612 24.6372C5.8032 24.2464 6.4468 24.2464 6.87388 24.6372L7.4375 25.153C8.18602 25.8379 9.31398 25.8379 10.0625 25.153C10.811 24.468 11.939 24.468 12.6875 25.153C13.436 25.8379 14.564 25.8379 15.3125 25.153C16.061 24.468 17.189 24.468 17.9375 25.153C18.686 25.8379 19.814 25.8379 20.5625 25.153L21.1261 24.6372C21.5532 24.2464 22.1968 24.2464 22.6239 24.6372C23.3508 25.3024 24.5 24.7711 24.5 23.7699V7.43174C24.5 6.03989 24.5 5.34397 24.3157 4.7827C23.9662 3.71839 23.1546 2.88279 22.1207 2.52304C21.5755 2.33333 20.8995 2.33333 19.5475 2.33333Z" stroke="#1C274C" stroke-width="1.5"/>
                  <path d="M12.25 12.8333H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M8.16699 12.8333H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M8.16699 8.75H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M8.16699 16.9167H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M12.25 8.75H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  <path d="M12.25 16.9167H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
              </div>
              <section class="order-data">
                <div class="order-data-address"></div>
                <div class="order-data-items"></div>
              </section>
            </div>
            <div class="order-list-line">
              <p>#14589</p>
              <p>09/08/2002</p>
              <p>XX</p>
              <p>Concluído</p>
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.5475 2.33333H8.45252C7.1005 2.33333 6.42449 2.33333 5.87929 2.52304C4.84542 2.88279 4.03373 3.71839 3.68427 4.7827C3.5 5.34397 3.5 6.03989 3.5 7.43174V23.7699C3.5 24.7711 4.64917 25.3024 5.37612 24.6372C5.8032 24.2464 6.4468 24.2464 6.87388 24.6372L7.4375 25.153C8.18602 25.8379 9.31398 25.8379 10.0625 25.153C10.811 24.468 11.939 24.468 12.6875 25.153C13.436 25.8379 14.564 25.8379 15.3125 25.153C16.061 24.468 17.189 24.468 17.9375 25.153C18.686 25.8379 19.814 25.8379 20.5625 25.153L21.1261 24.6372C21.5532 24.2464 22.1968 24.2464 22.6239 24.6372C23.3508 25.3024 24.5 24.7711 24.5 23.7699V7.43174C24.5 6.03989 24.5 5.34397 24.3157 4.7827C23.9662 3.71839 23.1546 2.88279 22.1207 2.52304C21.5755 2.33333 20.8995 2.33333 19.5475 2.33333Z" stroke="#1C274C" stroke-width="1.5"/>
                <path d="M12.25 12.8333H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M8.16699 12.8333H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M8.16699 8.75H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M8.16699 16.9167H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M12.25 8.75H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M12.25 16.9167H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
          </section> -->

          <table class="order-list">
            <thead class="order-list-header">
              <th>Order ID</th>
              <th>Data</th>
              <th>Total</th>
              <th>Status</th>
              <th>Comprovante</th>
            </thead>
            <tbody>
              <tr class="order-list-line">
                <td>#14589</td>
                <td>09/08/2002</td>
                <td>XX</td>
                <td>Concluído</td>
                <td>
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5475 2.33333H8.45252C7.1005 2.33333 6.42449 2.33333 5.87929 2.52304C4.84542 2.88279 4.03373 3.71839 3.68427 4.7827C3.5 5.34397 3.5 6.03989 3.5 7.43174V23.7699C3.5 24.7711 4.64917 25.3024 5.37612 24.6372C5.8032 24.2464 6.4468 24.2464 6.87388 24.6372L7.4375 25.153C8.18602 25.8379 9.31398 25.8379 10.0625 25.153C10.811 24.468 11.939 24.468 12.6875 25.153C13.436 25.8379 14.564 25.8379 15.3125 25.153C16.061 24.468 17.189 24.468 17.9375 25.153C18.686 25.8379 19.814 25.8379 20.5625 25.153L21.1261 24.6372C21.5532 24.2464 22.1968 24.2464 22.6239 24.6372C23.3508 25.3024 24.5 24.7711 24.5 23.7699V7.43174C24.5 6.03989 24.5 5.34397 24.3157 4.7827C23.9662 3.71839 23.1546 2.88279 22.1207 2.52304C21.5755 2.33333 20.8995 2.33333 19.5475 2.33333Z" stroke="#1C274C" stroke-width="1.5"/>
                    <path d="M12.25 12.8333H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 12.8333H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 8.75H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 16.9167H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12.25 8.75H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12.25 16.9167H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                </td>
              </tr>
              <tr class="order-address-info">
                <td colspan="5">
                  <div class="order-address-area">
                    <table class="order-address-table">
                      <thead class="order-address-header">
                        <th>Endereço</th>
                        <th>Complemento</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Cep</th>
                      </thead>
                      <tbody>
                        <tr class="order-address-info">
                          <td>Rua de lá</td>
                          <td>Perto dali</td>
                          <td>Maceió</td>
                          <td>Alagoas</td>
                          <td>57124892</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
              <tr class="order-item-info">
                <td colspan="5">
                  <div class="order-item-data">
                    <table class="order-item-table">
                      <thead class="order-item-header">
                        <th>Produto</th>
                        <th>Qtd.</th>
                        <th>IDCoin</th>
                      </thead>
                      <tbody>
                        <tr class="item-info">
                          <td>IMG DESC</td>
                          <td>1x</td>
                          <td>xx</td>
                        </tr>
                        <tr class="item-total">
                          <td>TOTAL: XX</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
              <tr class="order-list-line">
                <td>#14589</td>
                <td>09/08/2002</td>
                <td>XX</td>
                <td>Confirmado</td>
                <td>
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5475 2.33333H8.45252C7.1005 2.33333 6.42449 2.33333 5.87929 2.52304C4.84542 2.88279 4.03373 3.71839 3.68427 4.7827C3.5 5.34397 3.5 6.03989 3.5 7.43174V23.7699C3.5 24.7711 4.64917 25.3024 5.37612 24.6372C5.8032 24.2464 6.4468 24.2464 6.87388 24.6372L7.4375 25.153C8.18602 25.8379 9.31398 25.8379 10.0625 25.153C10.811 24.468 11.939 24.468 12.6875 25.153C13.436 25.8379 14.564 25.8379 15.3125 25.153C16.061 24.468 17.189 24.468 17.9375 25.153C18.686 25.8379 19.814 25.8379 20.5625 25.153L21.1261 24.6372C21.5532 24.2464 22.1968 24.2464 22.6239 24.6372C23.3508 25.3024 24.5 24.7711 24.5 23.7699V7.43174C24.5 6.03989 24.5 5.34397 24.3157 4.7827C23.9662 3.71839 23.1546 2.88279 22.1207 2.52304C21.5755 2.33333 20.8995 2.33333 19.5475 2.33333Z" stroke="#1C274C" stroke-width="1.5"/>
                    <path d="M12.25 12.8333H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 12.8333H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 8.75H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 16.9167H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12.25 8.75H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12.25 16.9167H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                </td>
              </tr>
            </tbody>
          </table>
          
          
          <!-- <div class="order-list-table">
            <table class="order-list-table-header">
              <tr class="order-list-header">
                <th>Order ID</th>
                <th>Data</th>
                <th>Total</th>
                <th>Status</th>
                <th>Comprovante</th>
              </tr>
            </table>
            <table class="order-list-table-line">
              <tr class="order-list-line">
                <td>#14589</td>
                <td>09/08/2002</td>
                <td>XX</td>
                <td>Concluído</td>
                <td>
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5475 2.33333H8.45252C7.1005 2.33333 6.42449 2.33333 5.87929 2.52304C4.84542 2.88279 4.03373 3.71839 3.68427 4.7827C3.5 5.34397 3.5 6.03989 3.5 7.43174V23.7699C3.5 24.7711 4.64917 25.3024 5.37612 24.6372C5.8032 24.2464 6.4468 24.2464 6.87388 24.6372L7.4375 25.153C8.18602 25.8379 9.31398 25.8379 10.0625 25.153C10.811 24.468 11.939 24.468 12.6875 25.153C13.436 25.8379 14.564 25.8379 15.3125 25.153C16.061 24.468 17.189 24.468 17.9375 25.153C18.686 25.8379 19.814 25.8379 20.5625 25.153L21.1261 24.6372C21.5532 24.2464 22.1968 24.2464 22.6239 24.6372C23.3508 25.3024 24.5 24.7711 24.5 23.7699V7.43174C24.5 6.03989 24.5 5.34397 24.3157 4.7827C23.9662 3.71839 23.1546 2.88279 22.1207 2.52304C21.5755 2.33333 20.8995 2.33333 19.5475 2.33333Z" stroke="#1C274C" stroke-width="1.5"/>
                    <path d="M12.25 12.8333H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 12.8333H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 8.75H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 16.9167H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12.25 8.75H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12.25 16.9167H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                </td>
              </tr>
              <tr class="order-list-line">
                <td>#14589</td>
                <td>09/08/2002</td>
                <td>XX</td>
                <td>Confirmado</td>
                <td>
                  <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5475 2.33333H8.45252C7.1005 2.33333 6.42449 2.33333 5.87929 2.52304C4.84542 2.88279 4.03373 3.71839 3.68427 4.7827C3.5 5.34397 3.5 6.03989 3.5 7.43174V23.7699C3.5 24.7711 4.64917 25.3024 5.37612 24.6372C5.8032 24.2464 6.4468 24.2464 6.87388 24.6372L7.4375 25.153C8.18602 25.8379 9.31398 25.8379 10.0625 25.153C10.811 24.468 11.939 24.468 12.6875 25.153C13.436 25.8379 14.564 25.8379 15.3125 25.153C16.061 24.468 17.189 24.468 17.9375 25.153C18.686 25.8379 19.814 25.8379 20.5625 25.153L21.1261 24.6372C21.5532 24.2464 22.1968 24.2464 22.6239 24.6372C23.3508 25.3024 24.5 24.7711 24.5 23.7699V7.43174C24.5 6.03989 24.5 5.34397 24.3157 4.7827C23.9662 3.71839 23.1546 2.88279 22.1207 2.52304C21.5755 2.33333 20.8995 2.33333 19.5475 2.33333Z" stroke="#1C274C" stroke-width="1.5"/>
                    <path d="M12.25 12.8333H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 12.8333H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 8.75H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M8.16699 16.9167H8.75033" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12.25 8.75H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M12.25 16.9167H19.8333" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                </td>
              </tr>
            </table>
          </div> -->
        </div>
      </section>
    </section>
  </section>
</main>
<style>
.header,.profile-content,.footer-area{
    display: none;
}
</style>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/cart.js"></script>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/loading.js"></script>
<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/profilePage.js"></script>
<script>
// Load website
$( window ).on("load", function() { // Garante que todo o site seja carregado
        setTimeout(function() {
            // Esconde a div de loading e mostra a div de conteúdo após o "carregamento"
            $(".body").delay(550).fadeOut('slow');
            $(".header").delay(400).fadeIn();
            $(".profile-content").delay(400).fadeIn();
            $(".footer-area").delay(400).fadeIn();
        }, 3000);
    })

</script>

<script>

</script>
<?php get_footer(); ?>