<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_ce0916e695747e4c01ff4b42e3cbf87f895cded4a5e856c4cea73d917eb09ecc extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2246ec1a647ffd4f9bc1a0c3a60c05a2d7c1fb460c31eecdd2255de386aef741 = $this->env->getExtension("native_profiler");
        $__internal_2246ec1a647ffd4f9bc1a0c3a60c05a2d7c1fb460c31eecdd2255de386aef741->enter($__internal_2246ec1a647ffd4f9bc1a0c3a60c05a2d7c1fb460c31eecdd2255de386aef741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2246ec1a647ffd4f9bc1a0c3a60c05a2d7c1fb460c31eecdd2255de386aef741->leave($__internal_2246ec1a647ffd4f9bc1a0c3a60c05a2d7c1fb460c31eecdd2255de386aef741_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
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
