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
        $__internal_1a71f0e6ca90f64ffde435e9d38d904976bb87b25ddc2aa19c9b8ca1241f1ece = $this->env->getExtension("native_profiler");
        $__internal_1a71f0e6ca90f64ffde435e9d38d904976bb87b25ddc2aa19c9b8ca1241f1ece->enter($__internal_1a71f0e6ca90f64ffde435e9d38d904976bb87b25ddc2aa19c9b8ca1241f1ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a71f0e6ca90f64ffde435e9d38d904976bb87b25ddc2aa19c9b8ca1241f1ece->leave($__internal_1a71f0e6ca90f64ffde435e9d38d904976bb87b25ddc2aa19c9b8ca1241f1ece_prof);

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
