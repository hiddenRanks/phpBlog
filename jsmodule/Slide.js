import $ from 'jquery';

export default class Slide {
    constructor(el) {
        this.current = 0;
        this.sList = $(".slide-image");
        this.indiList = $(".indecator li");

        this.indiList.each((idx, target) => {
            $(target).data("idx", idx);
        });

        this.sliding = false;

        this.indiList.on("click", (e) => {
            let idx = $(e.target).data("idx");
            if (this.current == idx || this.sliding) return;

            this.indiList.removeClass("active");
            this.indiList.eq(idx).addClass("active");

            this.sliding = true;
            //참: 오른쪽으로 이동 / 거짓: 왼쪽으로 이동
            if (this.current < idx) {
                this.sList.eq(idx).css({"left": "100%"});
                this.sList.eq(this.current).animate({left: "-100%"}, 1000);
                this.sList.eq(idx).animate({left: "0"}, 1000, () => {
                    this.sliding = false;
                });
            } else {
                this.sList.eq(idx).css({"left": "-100%"});
                this.sList.eq(this.current).animate({left: "100%"}, 1000);
                this.sList.eq(idx).animate({left: "0"}, 1000, () => {
                    this.sliding = false;
                });
            }

            this.current = idx;
        });
    }

    slide(idx) {

    }
}