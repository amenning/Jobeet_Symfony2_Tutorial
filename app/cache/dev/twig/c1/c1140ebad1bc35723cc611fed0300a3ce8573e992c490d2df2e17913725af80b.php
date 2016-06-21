<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_97d4f84aa58780b69bd4b40f86066ff1bd8860db00abc36cd2712ac632b5db91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f46e2c4a32c3d56b42c75a833a3fd341dab981b0ee06264a1bc6ff61ac425bdd = $this->env->getExtension("native_profiler");
        $__internal_f46e2c4a32c3d56b42c75a833a3fd341dab981b0ee06264a1bc6ff61ac425bdd->enter($__internal_f46e2c4a32c3d56b42c75a833a3fd341dab981b0ee06264a1bc6ff61ac425bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f46e2c4a32c3d56b42c75a833a3fd341dab981b0ee06264a1bc6ff61ac425bdd->leave($__internal_f46e2c4a32c3d56b42c75a833a3fd341dab981b0ee06264a1bc6ff61ac425bdd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */
