<?php

/* :job:new.html.twig */
class __TwigTemplate_73dded22e503bf237c6d8b1898778fed1716b7a580fd362137c18bdb70434b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f61449d37f346c0db31d55d64a4c6a107a69aca95ff95825859ffbd31254b51d = $this->env->getExtension("native_profiler");
        $__internal_f61449d37f346c0db31d55d64a4c6a107a69aca95ff95825859ffbd31254b51d->enter($__internal_f61449d37f346c0db31d55d64a4c6a107a69aca95ff95825859ffbd31254b51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f61449d37f346c0db31d55d64a4c6a107a69aca95ff95825859ffbd31254b51d->leave($__internal_f61449d37f346c0db31d55d64a4c6a107a69aca95ff95825859ffbd31254b51d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ae52a9de3981e8de175e56f0bd2529e296a3d0e85e2c91b0b4c4d48aa628af4 = $this->env->getExtension("native_profiler");
        $__internal_8ae52a9de3981e8de175e56f0bd2529e296a3d0e85e2c91b0b4c4d48aa628af4->enter($__internal_8ae52a9de3981e8de175e56f0bd2529e296a3d0e85e2c91b0b4c4d48aa628af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8ae52a9de3981e8de175e56f0bd2529e296a3d0e85e2c91b0b4c4d48aa628af4->leave($__internal_8ae52a9de3981e8de175e56f0bd2529e296a3d0e85e2c91b0b4c4d48aa628af4_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
