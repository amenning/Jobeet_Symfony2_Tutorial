<?php

/* EnsJobeetBundle:category:show.html.twig */
class __TwigTemplate_bba2332c0071601553f033ef5e60aed2a319fcb69a6bda303fa15a272d08f033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EnsJobeetBundle:category:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_83c2b54d4a03907b2716dff63f56dbcdad5657e83b0be290509f09375c285562 = $this->env->getExtension("native_profiler");
        $__internal_83c2b54d4a03907b2716dff63f56dbcdad5657e83b0be290509f09375c285562->enter($__internal_83c2b54d4a03907b2716dff63f56dbcdad5657e83b0be290509f09375c285562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c2b54d4a03907b2716dff63f56dbcdad5657e83b0be290509f09375c285562->leave($__internal_83c2b54d4a03907b2716dff63f56dbcdad5657e83b0be290509f09375c285562_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d126196e7344447c29ac8e537074118a09b6cdf6c8dcd7868369c3849039524e = $this->env->getExtension("native_profiler");
        $__internal_d126196e7344447c29ac8e537074118a09b6cdf6c8dcd7868369c3849039524e->enter($__internal_d126196e7344447c29ac8e537074118a09b6cdf6c8dcd7868369c3849039524e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo " category
";
        
        $__internal_d126196e7344447c29ac8e537074118a09b6cdf6c8dcd7868369c3849039524e->leave($__internal_d126196e7344447c29ac8e537074118a09b6cdf6c8dcd7868369c3849039524e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4119fd239322d50d9e51e4836455221f7768cabee484c4398386c5d41b899467 = $this->env->getExtension("native_profiler");
        $__internal_4119fd239322d50d9e51e4836455221f7768cabee484c4398386c5d41b899467->enter($__internal_4119fd239322d50d9e51e4836455221f7768cabee484c4398386c5d41b899467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4119fd239322d50d9e51e4836455221f7768cabee484c4398386c5d41b899467->leave($__internal_4119fd239322d50d9e51e4836455221f7768cabee484c4398386c5d41b899467_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_92b783cd919cbfc12be0742ef2efa819b67753e42d1bf2fe3afd7105fce38337 = $this->env->getExtension("native_profiler");
        $__internal_92b783cd919cbfc12be0742ef2efa819b67753e42d1bf2fe3afd7105fce38337->enter($__internal_92b783cd919cbfc12be0742ef2efa819b67753e42d1bf2fe3afd7105fce38337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"category\">
    <div class=\"feed\">
      <a href=\"\">Feed</a>
    </div>
    <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</h1>
  </div>
 
  ";
        // line 20
        $this->loadTemplate("EnsJobeetBundle:Job:list.html.twig", "EnsJobeetBundle:category:show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs", array()))));
        // line 21
        echo " 
  ";
        // line 22
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 23
            echo "    <div class=\"pagination\">
      <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => 1)), "html", null, true);
            echo "\">
        <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
      </a>
 
      <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : $this->getContext($context, "previous_page")))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
      </a>
 
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "        ";
                if (($context["page"] == (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")))) {
                    // line 34
                    echo "          ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
        ";
                } else {
                    // line 36
                    echo "          <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => $context["page"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
        ";
                }
                // line 38
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo " 
      <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : $this->getContext($context, "next_page")))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
      </a>
 
      <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_jobeet_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug", array()), "page" => (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))), "html", null, true);
            echo "\">
        <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjobeet/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
      </a>
    </div>
  ";
        }
        // line 49
        echo " 
  <div class=\"pagination_desc\">
    <strong>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : $this->getContext($context, "total_jobs")), "html", null, true);
        echo "</strong> jobs in this category
 
    ";
        // line 53
        if (((isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")) > 1)) {
            // line 54
            echo "      - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")), "html", null, true);
            echo "</strong>
    ";
        }
        // line 56
        echo "  </div>
";
        
        $__internal_92b783cd919cbfc12be0742ef2efa819b67753e42d1bf2fe3afd7105fce38337->leave($__internal_92b783cd919cbfc12be0742ef2efa819b67753e42d1bf2fe3afd7105fce38337_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 56,  182 => 54,  180 => 53,  175 => 51,  171 => 49,  164 => 45,  160 => 44,  154 => 41,  150 => 40,  147 => 39,  141 => 38,  133 => 36,  127 => 34,  124 => 33,  120 => 32,  114 => 29,  110 => 28,  104 => 25,  100 => 24,  97 => 23,  95 => 22,  92 => 21,  90 => 20,  84 => 17,  78 => 13,  72 => 12,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/*  */
/* {% block title %}*/
/*   Jobs in the {{ category.name }} category*/
/* {% endblock %}*/
/*  */
/* {% block stylesheets %}*/
/*   {{ parent() }}*/
/*   <link rel="stylesheet" href="{{ asset('bundles/ensjobeet/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/*  */
/* {% block body %}*/
/*   <div class="category">*/
/*     <div class="feed">*/
/*       <a href="">Feed</a>*/
/*     </div>*/
/*     <h1>{{ category.name }}</h1>*/
/*   </div>*/
/*  */
/*   {% include 'EnsJobeetBundle:Job:list.html.twig' with {'jobs': category.activejobs} %}*/
/*  */
/*   {% if last_page > 1 %}*/
/*     <div class="pagination">*/
/*       <a href="{{ path('ens_jobeet_category', { 'slug': category.slug, 'page': 1 }) }}">*/
/*         <img src="{{ asset('bundles/ensjobeet/images/first.png') }}" alt="First page" title="First page" />*/
/*       </a>*/
/*  */
/*       <a href="{{ path('ens_jobeet_category', { 'slug': category.slug, 'page': previous_page }) }}">*/
/*         <img src="{{ asset('bundles/ensjobeet/images/previous.png') }}" alt="Previous page" title="Previous page" />*/
/*       </a>*/
/*  */
/*       {% for page in 1..last_page %}*/
/*         {% if page == current_page %}*/
/*           {{ page }}*/
/*         {% else %}*/
/*           <a href="{{ path('ens_jobeet_category', { 'slug': category.slug, 'page': page }) }}">{{ page }}</a>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*  */
/*       <a href="{{ path('ens_jobeet_category', { 'slug': category.slug, 'page': next_page }) }}">*/
/*         <img src="{{ asset('bundles/ensjobeet/images/next.png') }}" alt="Next page" title="Next page" />*/
/*       </a>*/
/*  */
/*       <a href="{{ path('ens_jobeet_category', { 'slug': category.slug, 'page': last_page }) }}">*/
/*         <img src="{{ asset('bundles/ensjobeet/images/last.png') }}" alt="Last page" title="Last page" />*/
/*       </a>*/
/*     </div>*/
/*   {% endif %}*/
/*  */
/*   <div class="pagination_desc">*/
/*     <strong>{{ total_jobs }}</strong> jobs in this category*/
/*  */
/*     {% if last_page > 1 %}*/
/*       - page <strong>{{ current_page }}/{{ last_page }}</strong>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
