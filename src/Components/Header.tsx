import { useEffect, useState } from 'react';
import { MenuList } from './MenuList';
import { BiMenuAltRight } from 'react-icons/bi';
import '../Styles/Header.css';

export const Header = () => {
  const [isMenuActive, setMenuActive] = useState(false);

  useEffect(() => {
    const menu = document.getElementById('menu');
    const allLi = menu?.querySelectorAll('li');

    function linkAction(this: HTMLElement) {
      allLi?.forEach((n) => n.classList.remove('active'));
      this.classList.add('active');

      setMenuActive(!setMenuActive);
    }

    allLi?.forEach((n) => n.addEventListener('click', linkAction));
  }, []);

  const toggleActive = () => {
    setMenuActive(!isMenuActive);
  };

  return (
    <>
      <header>
        <nav className="nav bd_grid">
          <a href="" className="nav_logo">
            Personal
          </a>
          <ul className={isMenuActive ? 'show' : ''} id="menu">
            {MenuList &&
              MenuList.map((n) => (
                <li key={n.id}>
                  <a href={n.hyper_link}>{n.link_name}</a>
                </li>
              ))}
          </ul>
          <i className="toggleMenu" onClick={toggleActive}>
            <BiMenuAltRight />
          </i>
        </nav>
      </header>
    </>
  );
};
