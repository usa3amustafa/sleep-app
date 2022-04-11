const reviews = document.querySelectorAll('.review')

const dropdown = document.querySelector('.dropdown')
const dropdownMenu = document.querySelector('.dropdown-menu')
const hamburgerMenu = document.querySelector('.hamburger-menu')
const navLinks = document.querySelector('.nav-links')

const barOne = document.querySelector('.bar-1')
const barTwo = document.querySelector('.bar-2')
const barThree = document.querySelector('.bar-3')

const nav = document.querySelector('.navbar')

const sectionOne = document.querySelector('.header')

reviews.forEach(review => {
  const readReplyBtn = review.querySelector('.read-reply-btn')
  const reply = review.querySelector('.reply')

  readReplyBtn.addEventListener('click', () => {
    readReplyBtn.classList.add('hide-reply-btn')
    reply.classList.add('show-reply')
  })
})

document.addEventListener('click', e => {
  if (
    e.target.classList.contains('dropdown-btn') ||
    e.target.classList.contains('dropdown-icon')
  ) {
    dropdownMenu.classList.toggle('show-dropdown')
  } else {
    dropdownMenu.classList.remove('show-dropdown')
  }
})

hamburgerMenu.addEventListener('click', () => {
  navLinks.classList.toggle('show-nav')

  barOne.classList.toggle('rotate-45')
  barTwo.classList.toggle('op-0')
  barThree.classList.toggle('rotate--45')
})

// sticky nav using intersection observer API

const navHeight = nav.getBoundingClientRect().height

const stickyNav = function (enteries) {
  const [entry] = enteries
  if (!entry.isIntersecting) nav.classList.add('nav-sticky')
  else nav.classList.remove('nav-sticky')
}

const stickyNavOptions = {
  root: null,
  threshold: 0.3,
  rootMargin: `-${navHeight}px`,
}

const observer = new IntersectionObserver(stickyNav, stickyNavOptions)

observer.observe(sectionOne)
