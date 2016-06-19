<?php

/* :job:index.html.twig */
class __TwigTemplate_2a78f01ce69613b84b112b4ef418ad0d9b23743d74bef804e7f55b04c1ab0003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaa11e568f83a569b198eb20777d34738aca14ea6025ad8d6ddf6a345975da4e = $this->env->getExtension("native_profiler");
        $__internal_eaa11e568f83a569b198eb20777d34738aca14ea6025ad8d6ddf6a345975da4e->enter($__internal_eaa11e568f83a569b198eb20777d34738aca14ea6025ad8d6ddf6a345975da4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa11e568f83a569b198eb20777d34738aca14ea6025ad8d6ddf6a345975da4e->leave($__internal_eaa11e568f83a569b198eb20777d34738aca14ea6025ad8d6ddf6a345975da4e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2910da80c3881342733cd1396bbfa1affd65faffe57980f4b8c1009db85584c1 = $this->env->getExtension("native_profiler");
        $__internal_2910da80c3881342733cd1396bbfa1affd65faffe57980f4b8c1009db85584c1->enter($__internal_2910da80c3881342733cd1396bbfa1affd65faffe57980f4b8c1009db85584c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2910da80c3881342733cd1396bbfa1affd65faffe57980f4b8c1009db85584c1->leave($__internal_2910da80c3881342733cd1396bbfa1affd65faffe57980f4b8c1009db85584c1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_a87faa9c91e9da2b4842343d0bec9823653b2daf8e5c6ec568cddde37bae7a90 = $this->env->getExtension("native_profiler");
        $__internal_a87faa9c91e9da2b4842343d0bec9823653b2daf8e5c6ec568cddde37bae7a90->enter($__internal_a87faa9c91e9da2b4842343d0bec9823653b2daf8e5c6ec568cddde37bae7a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "  <div id=\"jobs\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "      <div class=\"category_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
            echo "\">
        <div class=\"category\">
          <div class=\"feed\">
            <a href=\"\">Feed</a>
          </div>
          <h1><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></h1>
        </div>
\t\t";
            // line 18
            $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", ":job:index.html.twig", 18)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
            // line 19
            echo "        
        ";
            // line 20
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 21
                echo "        \t<div class=\"more_jobs\">
        \t\tand <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
        \t\tmore...
        \t</div>
        ";
            }
            // line 26
            echo "      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  </div>
";
        
        $__internal_a87faa9c91e9da2b4842343d0bec9823653b2daf8e5c6ec568cddde37bae7a90->leave($__internal_a87faa9c91e9da2b4842343d0bec9823653b2daf8e5c6ec568cddde37bae7a90_prof);

    }

    public function getTemplateName()
    {
        return ":job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  116 => 26,  107 => 22,  104 => 21,  102 => 20,  99 => 19,  97 => 18,  90 => 16,  81 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div id="jobs">*/
/*     {% for category in categories %}*/
/*       <div class="category_{{ category.slug }}">*/
/*         <div class="category">*/
/*           <div class="feed">*/
/*             <a href="">Feed</a>*/
/*           </div>*/
/*           <h1><a href="{{ path('ens_jobeet_category', { 'slug': category.slug }) }}">{{ category.name }}</a></h1>*/
/*         </div>*/
/* 		{% include 'EnsJobeetBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}*/
/*         */
/*         {% if category.morejobs %}*/
/*         	<div class="more_jobs">*/
/*         		and <a href="{{ path('ens_jobeet_category', { 'slug': category.slug }) }}">{{ category.morejobs }}</a>*/
/*         		more...*/
/*         	</div>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
