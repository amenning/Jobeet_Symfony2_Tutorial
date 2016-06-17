<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_2a2774d7d0e71aa23843838f83d414d0a1d151197db4c2cbd7d3ffbd074419a6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa8a5870ec2efb0134994daeaf4b6ac2e07248c4d4bed394ed923839cd11a4d3 = $this->env->getExtension("native_profiler");
        $__internal_fa8a5870ec2efb0134994daeaf4b6ac2e07248c4d4bed394ed923839cd11a4d3->enter($__internal_fa8a5870ec2efb0134994daeaf4b6ac2e07248c4d4bed394ed923839cd11a4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa8a5870ec2efb0134994daeaf4b6ac2e07248c4d4bed394ed923839cd11a4d3->leave($__internal_fa8a5870ec2efb0134994daeaf4b6ac2e07248c4d4bed394ed923839cd11a4d3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
