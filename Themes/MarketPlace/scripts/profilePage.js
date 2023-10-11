const tabButtons = document.querySelectorAll('.tab-button');
const profileTabs = document.querySelectorAll('.profile-tab');
tabButtons.forEach((tabButton, index) => {
  tabButton.addEventListener('click', () => {
    profileTabs.forEach((profileTab) => {
      if (profileTab.classList.contains('active')) {
        profileTab.classList.remove('active');
      }
    });
    profileTabs[index].classList.add('active');

    // caso o botão clicado seja o de "Editar Conta"
    // a section "profile-orders" deve ser escondida
    if (index === 0) {
      document.querySelector('.profile-orders').style.display = 'none';
      document.querySelector('.edit-profile-form').style.display = 'flex';
    }

    if (index === 1) {
      document.querySelector('.edit-profile-form').style.display = 'none';
      document.querySelector('.profile-orders').style.display = 'flex';
    }

  });
});