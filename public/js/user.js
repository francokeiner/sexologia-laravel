const btnUser = document.querySelector('.header_user')
const userOptions = document.querySelector('.user_options')

btnUser.addEventListener('click', () => userOptions.classList.toggle('user_options-active'))

document.addEventListener('click', (e) => {
  if (!btnUser.contains(e.target))
  {
    userOptions.classList.remove('user_options-active')
  }
})