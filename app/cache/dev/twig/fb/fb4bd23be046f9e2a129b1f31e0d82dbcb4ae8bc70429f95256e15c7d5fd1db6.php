<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_2f10d701495b507aa9f4fb7b1fca8df3d247e57b1204330300e6626244fcb286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18b1b2a5cb05fd78d2e08cca21dd3d60d63b5d679cbbbcffa3b1d4a378544228 = $this->env->getExtension("native_profiler");
        $__internal_18b1b2a5cb05fd78d2e08cca21dd3d60d63b5d679cbbbcffa3b1d4a378544228->enter($__internal_18b1b2a5cb05fd78d2e08cca21dd3d60d63b5d679cbbbcffa3b1d4a378544228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18b1b2a5cb05fd78d2e08cca21dd3d60d63b5d679cbbbcffa3b1d4a378544228->leave($__internal_18b1b2a5cb05fd78d2e08cca21dd3d60d63b5d679cbbbcffa3b1d4a378544228_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
