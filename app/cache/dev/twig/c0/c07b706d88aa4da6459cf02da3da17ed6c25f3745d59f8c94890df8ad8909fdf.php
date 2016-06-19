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
        $__internal_22dd6b9e04219ad19e3833695d41bd95a76d6c74190edfedb952bb628d4da429 = $this->env->getExtension("native_profiler");
        $__internal_22dd6b9e04219ad19e3833695d41bd95a76d6c74190edfedb952bb628d4da429->enter($__internal_22dd6b9e04219ad19e3833695d41bd95a76d6c74190edfedb952bb628d4da429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22dd6b9e04219ad19e3833695d41bd95a76d6c74190edfedb952bb628d4da429->leave($__internal_22dd6b9e04219ad19e3833695d41bd95a76d6c74190edfedb952bb628d4da429_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_65ad9d1e6b44f6037f41442592467c9af217b6d9c8f8220a0c05aa803c3dae1a = $this->env->getExtension("native_profiler");
        $__internal_65ad9d1e6b44f6037f41442592467c9af217b6d9c8f8220a0c05aa803c3dae1a->enter($__internal_65ad9d1e6b44f6037f41442592467c9af217b6d9c8f8220a0c05aa803c3dae1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_65ad9d1e6b44f6037f41442592467c9af217b6d9c8f8220a0c05aa803c3dae1a->leave($__internal_65ad9d1e6b44f6037f41442592467c9af217b6d9c8f8220a0c05aa803c3dae1a_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_395573a231e90d80babef3e3ece3405cd7abb98ced4290533e6a1d64ef95244c = $this->env->getExtension("native_profiler");
        $__internal_395573a231e90d80babef3e3ece3405cd7abb98ced4290533e6a1d64ef95244c->enter($__internal_395573a231e90d80babef3e3ece3405cd7abb98ced4290533e6a1d64ef95244c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_395573a231e90d80babef3e3ece3405cd7abb98ced4290533e6a1d64ef95244c->leave($__internal_395573a231e90d80babef3e3ece3405cd7abb98ced4290533e6a1d64ef95244c_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_ef2c9c9064e11ac9e93691521f8aefad92bfb8cc949ce266c0cf65b971f1438e = $this->env->getExtension("native_profiler");
        $__internal_ef2c9c9064e11ac9e93691521f8aefad92bfb8cc949ce266c0cf65b971f1438e->enter($__internal_ef2c9c9064e11ac9e93691521f8aefad92bfb8cc949ce266c0cf65b971f1438e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_ef2c9c9064e11ac9e93691521f8aefad92bfb8cc949ce266c0cf65b971f1438e->leave($__internal_ef2c9c9064e11ac9e93691521f8aefad92bfb8cc949ce266c0cf65b971f1438e_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_65660bbc37f587b77b5adc5abdd2b4b7124242e1ac768cb4a98f156359fcd30e = $this->env->getExtension("native_profiler");
        $__internal_65660bbc37f587b77b5adc5abdd2b4b7124242e1ac768cb4a98f156359fcd30e->enter($__internal_65660bbc37f587b77b5adc5abdd2b4b7124242e1ac768cb4a98f156359fcd30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_65660bbc37f587b77b5adc5abdd2b4b7124242e1ac768cb4a98f156359fcd30e->leave($__internal_65660bbc37f587b77b5adc5abdd2b4b7124242e1ac768cb4a98f156359fcd30e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45c1ade3212dd34ba5f032a001a159298063740ccd4c3aed248db1b3b7c5b4e4 = $this->env->getExtension("native_profiler");
        $__internal_45c1ade3212dd34ba5f032a001a159298063740ccd4c3aed248db1b3b7c5b4e4->enter($__internal_45c1ade3212dd34ba5f032a001a159298063740ccd4c3aed248db1b3b7c5b4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_45c1ade3212dd34ba5f032a001a159298063740ccd4c3aed248db1b3b7c5b4e4->leave($__internal_45c1ade3212dd34ba5f032a001a159298063740ccd4c3aed248db1b3b7c5b4e4_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ac9494ab65457d69567dfcf0167105ecc0b0526bdcc236f5cddf6421a8692b0a = $this->env->getExtension("native_profiler");
        $__internal_ac9494ab65457d69567dfcf0167105ecc0b0526bdcc236f5cddf6421a8692b0a->enter($__internal_ac9494ab65457d69567dfcf0167105ecc0b0526bdcc236f5cddf6421a8692b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_ac9494ab65457d69567dfcf0167105ecc0b0526bdcc236f5cddf6421a8692b0a->leave($__internal_ac9494ab65457d69567dfcf0167105ecc0b0526bdcc236f5cddf6421a8692b0a_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_111abadcf3392d9581a02c9eee65476fe4b73b6b3f351a03a9b8e84879896f45 = $this->env->getExtension("native_profiler");
        $__internal_111abadcf3392d9581a02c9eee65476fe4b73b6b3f351a03a9b8e84879896f45->enter($__internal_111abadcf3392d9581a02c9eee65476fe4b73b6b3f351a03a9b8e84879896f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_111abadcf3392d9581a02c9eee65476fe4b73b6b3f351a03a9b8e84879896f45->leave($__internal_111abadcf3392d9581a02c9eee65476fe4b73b6b3f351a03a9b8e84879896f45_prof);

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
