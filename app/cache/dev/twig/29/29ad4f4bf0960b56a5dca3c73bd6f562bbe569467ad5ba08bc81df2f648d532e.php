<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_8472617c25c1c8173a6b609a01c367b89e996188cef13039e4990e0425c87e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e10c4ca70920ea4b29503cad8085f031486621176f45e65ee0e9e496a12b0ff4 = $this->env->getExtension("native_profiler");
        $__internal_e10c4ca70920ea4b29503cad8085f031486621176f45e65ee0e9e496a12b0ff4->enter($__internal_e10c4ca70920ea4b29503cad8085f031486621176f45e65ee0e9e496a12b0ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_e10c4ca70920ea4b29503cad8085f031486621176f45e65ee0e9e496a12b0ff4->leave($__internal_e10c4ca70920ea4b29503cad8085f031486621176f45e65ee0e9e496a12b0ff4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp|date }}*/
/* */
