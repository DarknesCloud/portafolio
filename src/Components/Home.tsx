import '../Styles/Home.css';
import { HomeSocial } from './HomeSocial';
import LadyImage from '../img/lady_img.png';
import Smiley from '../img/smiley_1.svg';
import LadyBgPath from '../img/lady_bgpath.svg';
import Star1 from '../img/star.svg';
import Star2 from '../img/star_2.svg';
import Star3 from '../img/star_3.svg';
import Medal from '../img/medal.svg';

export const Home = () => {
  return (
    <section className="home section bd_grid">
      <div className="circle circleOne"></div>
      <div className="circle circleTwo"></div>
      <div className="circle circleThree"></div>

      <div className="homeData">
        <h1 className="homeTitle">
          Hi, I'am <br /> <span>Saul Leiva</span> <br /> Web Designer
        </h1>

        <a href="#" className="button">
          Contact Me
        </a>
      </div>
      <div className="homeSocial">
        {HomeSocial &&
          HomeSocial.map((social) => (
            <a href={social.iconLink} key={social.id}>
              {social.iconName}
            </a>
          ))}
      </div>
      <div className="homeImg">
        <img src={LadyImage} className="profileImg" />
        <img src={LadyBgPath} alt="" className="profileBg" />

        <img src={Smiley} className="smiley" />
        <img src={Star1} className="star1" />
        <img src={Star2} className="star2" />
        <img src={Star3} className="star3" />

        <div className="box box1">
          <div className="imgBox">
            <img src="{Smiley}" alt="" />
          </div>
          <div className="contentBox">
            <h2>Ui/Ux</h2>
            <p>Type some content over here</p>
          </div>
        </div>

        <div className="box box1">
          <div className="imgBox">
            <img src="{Smiley}" alt="" />
          </div>
          <div className="contentBox">
            <h2>Ui/Ux</h2>
            <p>Type some content over here</p>
          </div>
        </div>
      </div>
    </section>
  );
};
