<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_ca8ab562324d9b8bd606a9fdd39c68ce1b14f44d7b34e819f170a24e64f7c4d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4db962a97977972542a81cd9bb0bf90ee0b758c9490e8d83cd357ab1e2b61324 = $this->env->getExtension("native_profiler");
        $__internal_4db962a97977972542a81cd9bb0bf90ee0b758c9490e8d83cd357ab1e2b61324->enter($__internal_4db962a97977972542a81cd9bb0bf90ee0b758c9490e8d83cd357ab1e2b61324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4db962a97977972542a81cd9bb0bf90ee0b758c9490e8d83cd357ab1e2b61324->leave($__internal_4db962a97977972542a81cd9bb0bf90ee0b758c9490e8d83cd357ab1e2b61324_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
