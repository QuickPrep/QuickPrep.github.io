const sections=document.querySelectorAll('.wrapper .main_content section')
const bubble=document.querySelectorAll('.bubble');
const options={
     threshold:0.7
};

let observer=new IntersectionObserver(navCheck,options);
function navCheck(entries){
     entries.forEach(entry=>{
          const className=entry.target.className;
          console.log(className);
     });
}
sections.forEach(section=>{
     observer.observe(section);
});