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
        $__internal_92209d8497a52022f4ce36f784c1eb70bb1eacfdcf14065a7fefb9543c3e5b36 = $this->env->getExtension("native_profiler");
        $__internal_92209d8497a52022f4ce36f784c1eb70bb1eacfdcf14065a7fefb9543c3e5b36->enter($__internal_92209d8497a52022f4ce36f784c1eb70bb1eacfdcf14065a7fefb9543c3e5b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92209d8497a52022f4ce36f784c1eb70bb1eacfdcf14065a7fefb9543c3e5b36->leave($__internal_92209d8497a52022f4ce36f784c1eb70bb1eacfdcf14065a7fefb9543c3e5b36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45927404875ecd80b26444884430229ff54b2c81c2f6c5117dee1601d3c6b1e5 = $this->env->getExtension("native_profiler");
        $__internal_45927404875ecd80b26444884430229ff54b2c81c2f6c5117dee1601d3c6b1e5->enter($__internal_45927404875ecd80b26444884430229ff54b2c81c2f6c5117dee1601d3c6b1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45927404875ecd80b26444884430229ff54b2c81c2f6c5117dee1601d3c6b1e5->leave($__internal_45927404875ecd80b26444884430229ff54b2c81c2f6c5117dee1601d3c6b1e5_prof);

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
