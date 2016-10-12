/*
 * ConceptEval by Muhammed Salman Shamsi is licensed under a Creative Commons Attribution-NonCommercial 4.0 International License.
 * To view legal code visit: https://creativecommons.org/licenses/by-nc/4.0/legalcode
 * Author: Muhammed Salman Shamsi
 * Created On: 4 Oct, 2016 10:13:59 PM
 */
$(function (){
    $('.horizontal-nav').on('mouseenter click mouseleave',function (){
        $('.responsive').toggleClass('show');
        $('.responsive').toggleClass('red-bg');
        $(this).toggleClass('red-bg');
    });
});
