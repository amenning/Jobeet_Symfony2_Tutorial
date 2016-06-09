<?php

/* job/new.html.twig */
class __TwigTemplate_1a1607ca29c8cb264943f0b9147dfc783e975cc97ec1a71e080c6a270bde62ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/new.html.twig", 1);
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
        $__internal_f77e46f1e7585f57be62ffa0bfb7e5238b53c3ae8d79c87ec27f108d0320c1e2 = $this->env->getExtension("native_profiler");
        $__internal_f77e46f1e7585f57be62ffa0bfb7e5238b53c3ae8d79c87ec27f108d0320c1e2->enter($__internal_f77e46f1e7585f57be62ffa0bfb7e5238b53c3ae8d79c87ec27f108d0320c1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f77e46f1e7585f57be62ffa0bfb7e5238b53c3ae8d79c87ec27f108d0320c1e2->leave($__internal_f77e46f1e7585f57be62ffa0bfb7e5238b53c3ae8d79c87ec27f108d0320c1e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10c7f5c9605b1fca8fe29a014d099f559f6560fcdc864fc816d8cd3cfb1b1eca = $this->env->getExtension("native_profiler");
        $__internal_10c7f5c9605b1fca8fe29a014d099f559f6560fcdc864fc816d8cd3cfb1b1eca->enter($__internal_10c7f5c9605b1fca8fe29a014d099f559f6560fcdc864fc816d8cd3cfb1b1eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10c7f5c9605b1fca8fe29a014d099f559f6560fcdc864fc816d8cd3cfb1b1eca->leave($__internal_10c7f5c9605b1fca8fe29a014d099f559f6560fcdc864fc816d8cd3cfb1b1eca_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
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
