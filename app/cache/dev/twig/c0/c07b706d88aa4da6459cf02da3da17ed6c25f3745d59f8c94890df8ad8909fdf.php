<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_322e8bc4875da8e40d7772cc84f2724e758219299ed161f8068a3cc7b496859c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b90117b0d23619f3bc12c8561f894ec849c9c9d5778d46eb0b7b20c2963d96b = $this->env->getExtension("native_profiler");
        $__internal_0b90117b0d23619f3bc12c8561f894ec849c9c9d5778d46eb0b7b20c2963d96b->enter($__internal_0b90117b0d23619f3bc12c8561f894ec849c9c9d5778d46eb0b7b20c2963d96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b90117b0d23619f3bc12c8561f894ec849c9c9d5778d46eb0b7b20c2963d96b->leave($__internal_0b90117b0d23619f3bc12c8561f894ec849c9c9d5778d46eb0b7b20c2963d96b_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_938234470eed5100041d18fcf676dde5986f9daa6976ddb5666e172be5625644 = $this->env->getExtension("native_profiler");
        $__internal_938234470eed5100041d18fcf676dde5986f9daa6976ddb5666e172be5625644->enter($__internal_938234470eed5100041d18fcf676dde5986f9daa6976ddb5666e172be5625644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_938234470eed5100041d18fcf676dde5986f9daa6976ddb5666e172be5625644->leave($__internal_938234470eed5100041d18fcf676dde5986f9daa6976ddb5666e172be5625644_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_f0564a21eb00f8d419aaba9d8fe8f0dd6c33be2d746ca5559a3fe936965c5d52 = $this->env->getExtension("native_profiler");
        $__internal_f0564a21eb00f8d419aaba9d8fe8f0dd6c33be2d746ca5559a3fe936965c5d52->enter($__internal_f0564a21eb00f8d419aaba9d8fe8f0dd6c33be2d746ca5559a3fe936965c5d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_f0564a21eb00f8d419aaba9d8fe8f0dd6c33be2d746ca5559a3fe936965c5d52->leave($__internal_f0564a21eb00f8d419aaba9d8fe8f0dd6c33be2d746ca5559a3fe936965c5d52_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_8b54aab8998a6982da04275fddb09a87d8ad4ba3d35eb1fcaecceae0008f6f43 = $this->env->getExtension("native_profiler");
        $__internal_8b54aab8998a6982da04275fddb09a87d8ad4ba3d35eb1fcaecceae0008f6f43->enter($__internal_8b54aab8998a6982da04275fddb09a87d8ad4ba3d35eb1fcaecceae0008f6f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_8b54aab8998a6982da04275fddb09a87d8ad4ba3d35eb1fcaecceae0008f6f43->leave($__internal_8b54aab8998a6982da04275fddb09a87d8ad4ba3d35eb1fcaecceae0008f6f43_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_0327af12ad039647cd2d914cf93882fdeaa1f287317195a29a88d3d609c205d2 = $this->env->getExtension("native_profiler");
        $__internal_0327af12ad039647cd2d914cf93882fdeaa1f287317195a29a88d3d609c205d2->enter($__internal_0327af12ad039647cd2d914cf93882fdeaa1f287317195a29a88d3d609c205d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_0327af12ad039647cd2d914cf93882fdeaa1f287317195a29a88d3d609c205d2->leave($__internal_0327af12ad039647cd2d914cf93882fdeaa1f287317195a29a88d3d609c205d2_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_414b21ad70a7616e93ecc9986186ff6dd0621c44c72ef9256be2a63f85699022 = $this->env->getExtension("native_profiler");
        $__internal_414b21ad70a7616e93ecc9986186ff6dd0621c44c72ef9256be2a63f85699022->enter($__internal_414b21ad70a7616e93ecc9986186ff6dd0621c44c72ef9256be2a63f85699022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_414b21ad70a7616e93ecc9986186ff6dd0621c44c72ef9256be2a63f85699022->leave($__internal_414b21ad70a7616e93ecc9986186ff6dd0621c44c72ef9256be2a63f85699022_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e9dc706fb4b58e0a3eefac11569c304b8c4187b6d69ae8cf95d8e49569a32850 = $this->env->getExtension("native_profiler");
        $__internal_e9dc706fb4b58e0a3eefac11569c304b8c4187b6d69ae8cf95d8e49569a32850->enter($__internal_e9dc706fb4b58e0a3eefac11569c304b8c4187b6d69ae8cf95d8e49569a32850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_e9dc706fb4b58e0a3eefac11569c304b8c4187b6d69ae8cf95d8e49569a32850->leave($__internal_e9dc706fb4b58e0a3eefac11569c304b8c4187b6d69ae8cf95d8e49569a32850_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_c72dd30db6b470aeca154ced359c946e4dd8e8e5983c490155a79c4715bdb50f = $this->env->getExtension("native_profiler");
        $__internal_c72dd30db6b470aeca154ced359c946e4dd8e8e5983c490155a79c4715bdb50f->enter($__internal_c72dd30db6b470aeca154ced359c946e4dd8e8e5983c490155a79c4715bdb50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_c72dd30db6b470aeca154ced359c946e4dd8e8e5983c490155a79c4715bdb50f->leave($__internal_c72dd30db6b470aeca154ced359c946e4dd8e8e5983c490155a79c4715bdb50f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
