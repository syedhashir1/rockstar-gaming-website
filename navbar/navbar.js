// Mobile menu toggle
const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
const mobileMenu = document.getElementById('mobileMenu');

mobileMenuIcon.addEventListener('click', () => {
  mobileMenu.style.display = mobileMenu.style.display === 'block' ? 'none' : 'block';
});

// Desktop dropdown functionality
const gamesItem = document.querySelector('.dropdown');
const gamesDropdown = document.getElementById('gamesDropdown');

if (gamesItem) {
  gamesItem.addEventListener('click', (e) => {
    e.stopPropagation();
    gamesDropdown.style.display = gamesDropdown.style.display === 'block' ? 'none' : 'block';
  });
}

// Close dropdowns when clicking outside
document.addEventListener('click', (e) => {
  if (gamesItem && !gamesItem.contains(e.target) && !gamesDropdown.contains(e.target)) {
    gamesDropdown.style.display = 'none';
  }
  
  if (!mobileMenuIcon.contains(e.target) && !mobileMenu.contains(e.target)) {
    mobileMenu.style.display = 'none';
  }
});

// Underline animation (desktop only)
const underline = document.getElementById('navUnderline');
const navItems = document.querySelectorAll('.navbar-center .nav-item');

if (navItems.length > 0) {
  navItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      const rect = item.getBoundingClientRect();
      const navbarRect = document.querySelector('.navbar-desktop').getBoundingClientRect();
      
      underline.style.width = `${rect.width}px`;
      underline.style.left = `${rect.left - navbarRect.left}px`;
      underline.style.opacity = '1';
    });

    item.addEventListener('mouseleave', () => {
      underline.style.opacity = '0';
    });
  });
}