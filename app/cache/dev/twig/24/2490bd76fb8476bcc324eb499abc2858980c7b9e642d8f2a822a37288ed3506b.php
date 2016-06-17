<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_7273f568f082088d60c7f10a7a139b645466267ab276979f824b9c88dee723c4 extends Twig_Template
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
        $__internal_b58e53aea07d839ea515d37faeaf16df0bd54fe71481c0d137455834be416bcb = $this->env->getExtension("native_profiler");
        $__internal_b58e53aea07d839ea515d37faeaf16df0bd54fe71481c0d137455834be416bcb->enter($__internal_b58e53aea07d839ea515d37faeaf16df0bd54fe71481c0d137455834be416bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_b58e53aea07d839ea515d37faeaf16df0bd54fe71481c0d137455834be416bcb->leave($__internal_b58e53aea07d839ea515d37faeaf16df0bd54fe71481c0d137455834be416bcb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
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
